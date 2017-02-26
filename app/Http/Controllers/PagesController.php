<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{

    /**
     * PagesController constructor.
     */
    public function __construct()
    {
    }


    public function home()
    {
        return view('pages.home');
    }


    public function about()
    {
        return view('pages.about');
        
        
//      User::create([
//            'username' => 'dplumptre',
//            'email' => 'dplumptre@yahoo.com',
//            'password' => bcrypt('password'),
//        ]);
        
        
    }


    public function news()
    {
        return view('pages.news');
    }


    public function faq()
    {
        return view('pages.faq');
    }


    public function contact()
    {
        return view('pages.contact');
    }


    public function login()
    {
        return view('pages.login');
    }


    public function register()
    {
        return view('pages.register');
    }

}
