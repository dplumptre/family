<?php

namespace App\Http\Controllers;

use App\Events\UserRegistered;
use App\Http\Requests\RegisterUser;
use App\Mail\UserWelcome;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{


    public function create()
    {
        return view('pages.register');
    }


    public function store(RegisterUser $registerUser)
    {
        $user = $registerUser->save();
        auth()->login($user);
        event(new UserRegistered($user));
        notify()->flash("Account Created","success",['text'=>'You have been logged in!']);
        return redirect()->route('dashboard');
    }
}
