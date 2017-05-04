<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NewAutomatedReceiver;
use App\Http\Requests\Admin\NewReceiver;
use App\Http\Requests\UpdateUserRole;
use App\Models\AutomatedReceiver;
use App\Models\DisabledUser;
use App\Models\Package;
use App\Models\Pair;
use App\Models\Payer;
use App\Models\Receiver;
use App\Models\Role;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function apiTokens()
    {
        return view('admin.apitokens.index');
    }

    public function roleIndex()
    {
        $data = User::paginate(20);
        $roles = Role::all();
        return view('admin.roles.index', ['data'=>$data, 'roles'=>$roles]);
    }


    public function postRole(UpdateUserRole $request)
    {
        $request->save();
        flash('Roles saved', 'success');
        return redirect()->back();
    }


    public function Pairs()
    {
        $data = Receiver::with('pairs', 'user')->where('status', '>', 0)->paginate(20);
        //dd($data);
        return view('admin.pairs.index', compact('data'));
    }


    public function PostPairs()
    {

    }


    public function automatedReceivers(User $user)
    {
        $data = AutomatedReceiver::select()->with('user','package')->get();
        $admins = Role::where('type', 'admin')->with('users')->first();
        $packages = Package::all();
        return view('admin.automated-receivers.index', compact('data', 'admins', 'packages'));
    }

    public function PostAutomatedReceivers(NewAutomatedReceiver $automatedReceiver)
    {
        $automatedReceiver->save();
        return redirect()->back();
    }


    public function Receivers()
    {
        $data = Receiver::with('user', 'packages')->paginate(20);
        $users = User::select(['id', 'username', 'email'])->get();
        $packages = Package::all();
        return view('admin.receivers.index', compact('data', 'users', 'packages'));
    }


    public function PostReceivers(NewReceiver $request)
    {
        $request->save();
        return redirect()->back();
    }


    public function Users()
    {
        $data = User::with('userDetail')->paginate(20);
        return view('admin.users.index', compact('data'));
    }


    public function DisabledUsers()
    {
        $data = DisabledUser::with('user')->latest()->paginate(20);
        return view('admin.disabled-users.index', compact('data'));
    }


    public function PostDisabledUsers()
    {

    }


    public function ApiDefaulters()
    {
        return Payer::where('pairing_result', 1)->with('user', '')->get();
    }
    public function defaulters()
    {
        $data = Payer::where('pairing_result', 1)->with('user')->get();
        //return $data;
        return view('admin.defaulters.index');
    }


    public function SearchUser()
    {

    }
}
