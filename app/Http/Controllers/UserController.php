<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePassword;
use App\Http\Requests\UpdateProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //


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
        return view('user-area/donate');
    }


    public function updateDetails()
    {
        return view('user-area.update-details');
    }

}
