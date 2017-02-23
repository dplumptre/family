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


    public function outgoing()
    {
        return view('user-area/outgoing');
    }


    public function incoming()
    {
        return view('user-area/incoming');
    }


    public function bank()
    {
        return view('user-area/bank');
    }


    public function donate()
    {
        return view('user-area/donate');
    }

}
