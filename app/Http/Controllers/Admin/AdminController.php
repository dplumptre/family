<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UpdateUserRole;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{

    public function apiTokens()
    {
        return view('admin.apitokens.index');
    }

    public function roleIndex()
    {
        $data = User::paginate(15);
        $roles = Role::all();
        return view('admin.roles.index', ['data'=>$data, 'roles'=>$roles]);
    }


    public function postRole(UpdateUserRole $request)
    {
        $request->save();
        flash('Roles saved', 'success');
        return redirect()->back();
    }
}
