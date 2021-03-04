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

    Public function queryresults()
    {
        $searchString = Request::post('searchstring');
        if($searchString == "")
        {
            return NULL;
        } 
        $response = User::where('username', 'like', '%'.$searchString.'%')
                    ->orWhere('email', 'like', '%'.$searchString.'%')
                    ->get();
        return response()->json($response);
    }

    Public function ajaxgetthings()
    {
        $response = User::all();
        return response()->json($response);
    }

    Public function ajaxinsertnew()
    {
        $user = new User;
        $user->username = Request::get('newusername');
        $user->email = Request::get('newusername')."@email.com";
        $user->password = Request::get('newusername');
        $user->save();
    }

    Public function availabilitycheck()
    {
        $username = Request::get('uname');
        $response = User::where('username', $username)->first();
        if ($response)
        {
            return response()->json(['availability' => 'false']);
        }
        else
        {
            return response()->json(['availability' => 'true']);
        }
        
    }
}
