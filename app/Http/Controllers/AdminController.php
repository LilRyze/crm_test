<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App;

class AdminController extends Controller
{
    public function currentUser()
    {
        return Auth::user();
    }

    public function showUsers()
    {
        if (Auth::check()) {
            if ($this->currentUser()->role === 'admin') {
                $users = App\User::all();
                return view('/layouts/watch_users_admin', ['users' => $users]);
            } else {
                return redirect('/');
            }
        } else {
            return redirect('/');

        }
    }

    public function getEditUsers()
    {
        return view('layouts/edit_users');
    }

    public function editUsers(Request $request)
    {
        App\User::where('id', $request->id)->
        update([
            'name' => $request->name,
            'role' => $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return 'Created';
    }

    public function getAddUsers()
    {
        return view('layouts/add_users');
    }

    public function addUsers(Request $request)
    {
        App\User::create([
            'name' => $request->name,
            'role'=> $request->role,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return 'User created';
    }

    public function getDeleteUsers()
    {
        return view('layouts\delete_users');
    }

    public function deleteUsers(Request $request)
    {
        App\User::where('id', $request->id)->delete();
        return 'User was deleted';
    }
}
