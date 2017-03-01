<?php
namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Payer;
use App\Abstracts\useful_functions;
use Auth;
use Illuminate\Http\Request;


class UserController extends Controller
{
    //
    
    public  $handycodes="";
    

       function __construct() {
           
        /*
         * created an abstract class useful funstions
         * to put some codes that might be reusable 
         * and we can use any time and instatiated it below
         * so its available
         * /
         */
        $this->handycodes = new useful_functions();

    }

    

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
      return  view('user-area/incoming');
    }



    public function donate()
    {
        $id = Auth::id();
        $package = Package::get();
        $payer   = Payer::with('packages')->where('user_id',$id)->orderBy('id', 'DESC')->get();
        
        //dd( $payer);
        
        return view('user-area/donate')->with('package',  Package::all())
                                        ->with('arr', $this->handycodes->arr)
                                        ->with('payer',$payer);
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
            notify()->flash("Package successfully selected","success",['text'=>'You will be sent an email as soon as you have been matched!']);
            return redirect()->route('post.donate')->with('status',$this->handycodes->arr[0]);    
              
                
                
                
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
//            return redirect()->route('post.donate')->with('status',$this->handycodes->arr[0]);    
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
