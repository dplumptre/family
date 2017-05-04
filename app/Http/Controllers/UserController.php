<?php
namespace App\Http\Controllers;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\createPackage;
use App\Http\Requests\UpdateProfile;
use App\Models\Package;
use App\Models\Pair;
use App\Models\Payer;
use App\Models\Receiver;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\uploadRequest;
use App\Http\Requests\NewsRequest;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Auth;
use Illuminate\Support\Facades\Request;
use App\Models\User;
use App\Models\Newz;

class UserController extends Controller
{
    const PENDING = 0;
    const PROCESSING = 1;
    const COMPLETED = 2;


    function __construct()
    {
        $this->middleware('update.profile')->except(['index', 'profile', 'postProfile']);
    }


    public function index(User $users, Newz $news)
    {
        $id = Auth::id();
        $payer = Payer::with('packages')->where('user_id', $id)->where('pairing_result', 0)->oldest()->get();
        return view('user-area/index')->with('arr', arr())
            ->with('news', $news::latest()->get())
            ->with('allusers', $users->allUsers())
            ->with('payer', $payer);
    }


    public function dashboardAdmin(User $users, Payer $payer, Pair $pair)
    {
        $rid = auth()->user()->receivers()->where('status', '>', self::PENDING)->pluck('id');
        
        //dd($rid);
        
        $paymenttins = 0;

        if (count($pair->completedRecRows())) {
            $paymenttins = $pair::where('receiver_status', self::COMPLETED)
                ->whereIn('receiver_id', $rid)
                //->toSql();
                ->get();
            
            
           // dd($paymenttins);

            if (!$paymenttins) {
                $paymenttins = 0;
            }

        }

        $failedpayers = $payer::with('user')->where('pairing_result', 1)->get();

        if ($failedpayers) {
            $fp = $failedpayers;
        } else {
            $fp = "";
        }


        return view('user-area/dashboard-admin')->with('fp', $fp)
            ->with('payment', $paymenttins);
    }


    public function news(Newz $news)
    {
        $news = $news::all();
        return view('user-area/news')->with('news', $news);
    }


    public function viewNews($id, Newz $news)
    {
        $news = $news::find($id);
        return view('user-area/view-news')->with('news', $news);
    }


    public function postNews(NewsRequest $request, Newz $news)
    {
        $id = Auth::id();
        $news::create([
            'title' => $request->title,
            'slug_title' => str_slug($request->title),
            'picture' => 'example.jpg',
            'body' => $request->body,
            'user_id' => $id
        ]);
        return redirect()->route('post.news');
    }


    public function destroyNews($id, Newz $news)
    {
        $news = $news::find($id);
        $news->delete();
        return redirect()->route('newz');
    }


    public function profile()
    {
        return view('user-area/profile');
    }


    public function postProfile(UpdateProfile $request)
    {
        $request->save();
        return redirect()->back();
    }


    public function changePassword()
    {
        return view('user-area.change-password');
    }


    public function postChangePassword(ChangePassword $request)
    {
        $request->save();
        return redirect()->route('dashboard');
    }


    public function postOut()
    {
        $payer_id = Input::get('payer_id');
        $pair_id = Input::get('pair_id');
        Payer::where('id', $payer_id)->update(['status' => self::COMPLETED]);
        Pair::where('id', $pair_id)->update(['payer_status' => self::COMPLETED]);

        return redirect()->route('outgoing');
    }


    public function postIn()
    {
        $r_id = Input::get('r_id');
        $pair_id = Input::get('pair_id');
        Pair::where('id', $pair_id)->update(['receiver_status' => self::COMPLETED]);
        Receiver::where('id', $r_id)->update(['status' => self::COMPLETED]);
        return redirect()->route('incoming');

    }


    public function outgoing(Pair $pair, Payer $payer, Auth $auth)
    {
        //basicalling getting the person i am pairing with and will be paying to
        $payerid_array = auth()->user()->payers()->where('status', '>', self::PENDING)->pluck('id');
        if ($payerid_array) {
            $p = $pair->whereIn('payer_id', $payerid_array)->get();
        } else {
            $p = null;
        }

        return view('user-area/outgoing')->with('getPair', $p);
    }


    public function incoming(Pair $pair, Receiver $receiver, Auth $auth)
    {
        $receiverid_array = auth()->user()->receivers()->where('status', '>', self::PENDING)->pluck('id');
        if ($receiverid_array) {
            $p = $pair->whereIn('receiver_id', $receiverid_array)->get();
        } else {
            $p = null;
        }
        return view('user-area/incoming')->with('getPair', $p);
    }


    public function upload($pair_id)
    {
        return view('user-area/upload')->with('pair_id', $pair_id);
    }


    public function postupload(uploadRequest $request)
    {

        $image = $request->file('file');
        $pair_id = $request->get('pair_id');


        $p = Pair::find($pair_id);
        $delthumb_path = 'assets/images/thumb/' . $p->image;
        $delnormal_path = 'assets/images/pics/' . $p->image;


        if ($p->image !== 'example.jpg') {
            unlink($delthumb_path);
            unlink($delnormal_path);
        }

        /* change name */
        $filename = arrageImageName($image->getClientOriginalName());
        $thumb_path = 'assets/images/thumb/' . $filename;
        $normal_path = 'assets/images/pics/' . $filename;
        Pair::where('id', $pair_id)->update(['image' => $filename]);
        /*
         * Declearing path
         * make sure you chmod 777 the dir below
         * or you will get error daying "Can't write image data to path "
         *  */


        $thumb = Image::make($image->getRealPath())->resize(90, 90)->sharpen(15)->save($thumb_path);
        $normalimage = Image::make($image->getRealPath())->save($normal_path);

        notify()->flash("image successfully updated", "success", ['text' => 'Go ahead and click the i,ve paid button']);
        return redirect()->route('outgoing');
    }


    public function donate()
    {
        $id = Auth::id();
        $package = Package::all();
        $payer = Payer::with('packages')->where('user_id', $id)->where('pairing_result', 0)->oldest()->get();

        return view('user-area/donate')->with('package', $package)
            ->with('arr', arr())
            ->with('payer', $payer);
    }


    public function postDonate(createPackage $request)
    {
        $id = Auth::id();
        $payer = Payer::create([
            'user_id' => $id,
            'package_id' => $request->package,
            'status' => 0,
            'pairing_result' => 0,
        ]);

        notify()->flash("Package successfully selected", "success", ['text' => 'You will be sent an email as soon as you have been matched!']);
        return redirect()->route('post.donate')->with('status', arr()[0]);
    }


    
       public function destroyDonation($id)
    {
        $payer = Payer::find($id);
        $payer->delete();
        return redirect()->route('donate');
    }
    
    
    
    public function updateDetails()
    {
        return view('user-area.update-details');
    }

}
