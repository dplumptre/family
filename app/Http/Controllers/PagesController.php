<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Payer;
use App\Models\Pair;
use App\Models\Package;
use App\Models\Receiver;
use App\Http\Requests\contactRequest;
use Illuminate\Mail\Mailable;
use App\Mail\contactMail;

class PagesController extends Controller
{

    /**
     * PagesController constructor.
     */
    private $users ;
    private $pairs;
    private $payers;
    private $receivers;

    function __construct(User $users, Payer $payer, Pair $pair,Receiver $receiver)
    {
        $this->users = $users;
        $this->payers = $payer;
        $this->pairs  = $pair;
        $this->receivers = $receiver;
    }


    public function home()
    {
              $amount_paid = $this->pairs
                            ->where('status',1)->select('amount')->get();
              if( empty($amount_paid )){  $amount_paid = 0; }
        return view('pages.home')->with('allusers',$this->users->allUsers())
                                 ->with('latestusers',  $this->users->latestUsers())
                                  ->with('amount_paid',$amount_paid);
    }


    public function about()
    {
       
      
 return view('pages.about');
        
        
// Package::create([
//            'name' => 'Bronze',
//            'paying_amount' => 20000,
//            'receiving_amount' => 20000,
//            'description' => "This is the beginner package"
//        ]);
        
//       
//        Receiver::create([
//            'user_id' => 5,
//            'package_id' => 3,
//            'status' => 0,
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


    public function postcontact(contactRequest $request)
    {
       Mail::to('batman@batcave.io')->send(new contactMail($contactDetails));
       return redirect()->route('post.contact');
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
