<?php
namespace App\Http\Controllers;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\createPackage;
use App\Http\Requests\UpdateProfile;
use App\Models\Package;
use App\Models\Payer;
use Auth;


class UserController extends Controller
{
    //


    protected $arr = array(

        0 => 'pending',
        1 => 'processing',
        2 => 'completed'
    );


    public function index()
    {
        return view('user-area/index');
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


    public function outgoing()
    {
        return view('user-area/outgoing');
    }


    public function incoming()
    {
        return view('user-area/incoming');
    }


    public function donate()
    {
        $package = Package::get();
        $payer = Payer::with('packages')->get();

        //dd( $payer);

        return view('user-area/donate')->with('package', Package::all())
            ->with('arr', $this->arr)
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

        $package = Package::find($request->package);


        notify()->flash("Package successfully selected", "success", ['text' => 'You will be sent an email as soon as you have been matched!']);
        return redirect()->route('post.donate')->with('status', $this->arr[0]);
    }


    public function updateDetails()
    {
        return view('user-area.update-details');
    }

}
