<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App;

class AdminController extends Controller
{

    public function showUsers()
    {
        try {
            $users = App\User::all();
            return view('/layouts/watch_users_admin', ['users' => $users]);
        }

        catch (\Exception $e) {
            echo $e;
        }
    }

    public function getEditUsers()
    {
        return view('layouts/edit_users');
    }

    public function editUsers(Request $request)
    {
        try {
            App\User::where('id', $request->id)->
            update([
                'name' => $request->name,
                'role' => $request->role,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return 'Created';
        }

        catch (\Exception $e) {
            echo $e;
        }

    }

    public function getAddUsers()
    {
        return view('layouts/add_users');
    }

    public function addUsers(Request $request)
    {
        try {
            App\User::create([
                'name' => $request->name,
                'role' => $request->role,
                'email' => $request->email,
                'password' => Hash::make($request->password)
            ]);
            return 'User created';
        }

        catch (\Exception $e) {
            echo $e;
        }
    }

    public function getDeleteUsers()
    {
        return view('layouts\delete_users');
    }

    public function deleteUsers(Request $request)
    {
        try {
            App\User::where('id', $request->id)->delete();
            return 'User was deleted';
        }

        catch (\Exception $e) {
            echo $e;
        }
    }
}
