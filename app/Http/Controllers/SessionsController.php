<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Auth;
use Illuminate\Support\Facades\Log;

class SessionsController extends Controller
{
    /**
     * SessionsController constructor.
     */
    public function __construct()
    {
    }


    public function create()
    {
        return view('pages.login');
    }


    public function store(LoginUser $request)
    {
        $login_data = $request->only('email', 'password');
        $remember = $request->get('rememberMe');
        if ( Auth::attempt($login_data, $remember) )
        {

            if ( $request->ajax() ){
                return response()->json(['success'=>true, 'message'=> 'Login Successful']);
            }
            notify()->flash('Login Successful', 'success', ['text'=>'You have been logged in successfully']);
            return redirect()->intended('user-area');
        }
        if ( $request->ajax() ){
            return response()->json(['success'=>false, 'message'=>'Email/Password invalid']);
        }
        notify()->flash('Invalid Email/Password', 'error');
        return redirect()->back()->withInput(Input::except('password'));
    }


    public function destroy()
    {
        auth()->logout();
        view()->share('currentUser', null);
        notify()->flash("Logged Out", 'success', ['text'=>'You have been logged out successfully']);
        return redirect()->route('home');
    }
}
