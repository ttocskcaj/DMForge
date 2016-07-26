<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['uses' => 'Auth\AuthController@welcome', 'as' => 'welcome']);

Route::get('{form}', 'Auth\AuthController@welcomeWithForm')->where(['form' => 'login|register']);

Route::auth();


//Route::get('/register', function(){
//    return redirect('/?showform=login');
//
//});

Route::get('/home', 'HomeController@index');

Route::get('/dashboard', function() {
    return view('app.dashboard');
});