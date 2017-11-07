<?php

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

Route::get('/', function () {
    return view('home.home');
});

Route::get('/users', function () {
    $Users = DB::table('users')->latest()->get();
    $Users = App\User::All();
});

Route::get('/users/{user}', function () {
    return view('users/user');
});

Route::get('/compliments/received', function () {
    return view('compliments/received');

  });

  Route::get('/compliments/given', function () {
      return view('compliments/sent');
    });
