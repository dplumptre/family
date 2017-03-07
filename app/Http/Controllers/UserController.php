<?php
namespace App\Http\Controllers;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\createPackage;
use App\Http\Requests\UpdateProfile;
use App\Models\Package;
use App\Models\Payer;
use App\Abstracts\useful_functions;
use Auth;


class UserController extends Controller
{
    //


    function __construct()
    {
    }


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
        $id = Auth::id();
        $package = Package::all();
        $payer = Payer::with('packages')->where('user_id', $id)->oldest()->get();

        return view('user-area/donate')->with('package', $package)
            ->with('arr', arr())
            ->with('payer', $payer);
    }


    public function postDonate(\App\Http\Requests\createPackage $request)
    {
        $id = Auth::id();
        Payer::create([
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
