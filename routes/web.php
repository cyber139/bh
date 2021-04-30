<?php

use Illuminate\Support\Facades\Route;

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

    // $user = Auth::user();
    // if($user->isAdmin()){
    //     // return view('welcome')->with('alert', 'You are signed in as an admin!');
    //     echo "Admin";
    // }
     return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/roles', 'RoleController');


// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
