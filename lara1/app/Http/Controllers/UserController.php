<?php

namespace App\Http\Controllers;

use Request;
use \App\User;

class UserController extends Controller
{
    Public function showusers()
    {
        return view('users')->with('allusers', User::all());
    }

    Public function testjson()
    {
        $users = User::all();
        return response()->json($users);
    }

    Public function newuser()
    {
        $user = new User;
        $user->username = Request::post('username');
        $user->email = Request::post('email');
        $user->password = Request::post('password');
        $user->save();

        return redirect('users');
    }

    Public function deleteuser($userId)
    {
        User::where('id', $userId)->delete();
        return redirect('users');
    }

    Public function edituser($userId)
    {
        Return view('edituser')->with('usertoedit', User::where('id', $userId)->first());
    }

    Public function updateuser($userId)
    {
        User::where('id', $userId)->update
            ([  
                'username' => Request::post('username'),
                'email' => Request::post('email'),
                'password' => Request::post('password')
            ]);

        return redirect('users');
    }
}
