<?php

Use \App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('createusers', function(){
    Schema::create('users', function($newtable){
        $newtable->increments('id');
        $newtable->string('username', 35);
        $newtable->string('password', 255);
        $newtable->string('email', 50);
        $newtable->timestamps();
    });
    return view('welcome');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function(){
    return view('about');
});

Route::get('about2/{myVariable}', function($myVariable){
    return "This page is all about {$myVariable} and such";
});

Route::get('about/{myVariable}', function($myVariable){
    return view ('about', ['data' => $myVariable]);
});

/* Route::get('users', function(){
    return view('users')->with('allusers', User::all());
}); */

Route::get('users', 'UserController@showusers');

Route::get('testjson', 'UserController@testjson');

Route::get('users/new', function()
{
    return view('newuser');
});

Route::post('users/addnew', 'UserController@newuser');

Route::get('users/delete/{userId}', 'UserController@deleteuser');

Route::get('users/edit/{userId}', 'UserController@edituser');

Route::post('users/updateuser/{userId}', 'UserController@updateuser');

Route::get('search', function(){
    return view('search');
});

Route::get ('queryresults', 'UserController@queryresults');

Route::get ('live', function()
{
    return view ('livelist');
});

Route::get('ajaxgetthings', 'UserController@ajaxgetthings');

Route::get('ajaxinsertnew', 'UserController@ajaxinsertnew');

Route::get('availability', function(){
    return view('availability');
});

Route::get('availabilitycheck', 'UserController@availabilitycheck');