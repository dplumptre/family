<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\NewAutomatedReceiver;
use App\Http\Requests\UpdateUserRole;
use App\Models\AutomatedReceiver;
use App\Models\Package;
use App\Models\Receiver;
use App\Models\Role;
use App\Models\User;
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
}
