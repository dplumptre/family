<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    }


    public function news()
    {

    }


    public function faq(){}


    public function contact(){}
}
