<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


    public function changePassword()
    {
        return view('user-area.change-password');
    }

    public function postChangePassword(Request $request)
    {

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
