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
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Auth;
use Illuminate\Support\Facades\Request;
use App\Models\User;

class UserController extends Controller
{
    //


    const PENDING = 0;
    const PROCESSING = 1;
    const COMPLETED = 2;

    private $users;


    function __construct(User $users)
    {
        $this->users = $users;
    }


    public function index()
    {

        $id = Auth::id();
        $payer = Payer::with('packages')->where('user_id', $id)->where('pairing_result', 0)->oldest()->get();
        return view('user-area/index')->with('arr', arr())
            ->with('allusers', $this->users->allUsers())
            ->with('payer', $payer);
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


//            $id = Auth::id();
//            $package = Package::find($request->package); 
//            //this will get the higest package id in the table 
//            $pk= Payer::where('user_id', '=',  $id)->max('package_id'); 
//            if($pk === null || $pk  <= $request->package ){
//            $payer =  Payer::create([
//            'user_id' => $id,
//            'package_id' => $request->package,
//            'status' => 0,
//            'pairing_result' => 0,
//            ]);  
//            notify()->flash("Package successfully selected","success",['text'=>'You will be sent an email as soon as you have been matched!']);
//            return redirect()->route('post.donate')->with('status',arr()[0]);    
//            }else{
//            notify()->flash("Error","error",['text'=>'You cannot select a lower package than the one previous one!']);
//            return redirect()->route('post.donate');    
//            }         


    }


    public function updateDetails()
    {
        return view('user-area.update-details');
    }

}
