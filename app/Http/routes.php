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


// Route::group(['middleware' => 'auth'], function(){
//     Route::get('/', function(){ return view('layouts.main');});
//     Route::get('/login', function(){ return view('layouts.main');});

// });
Route::get('/',['middleware' => 'auth', function(){
    return redirect('/main');
}]);
Route::get('/login',['middleware' => 'isLogin' , function(){
    return view('layouts.login');
}]);

Route::post('/login',['middleware' => 'login', function(){
    return redirect('/main');
}]);


Route::get('/main', ['middleware' => 'auth', 'uses' => 'WebController@showHero']);

Route::get('/logout', ['middleware' => 'auth', 'uses' => 'WebController@logout']);
// // Authentication routes...
// Route::get('/login', 'Auth\AuthController@getLogin');
// Route::post('/login', 'Auth\AuthController@postLogin');
//  Route::get('/logout', 'Auth\AuthController@getLogout');

// // Registration routes...
Route::get('/register', ['middleware' => 'isLogin', function(){
    return view('layouts.register');
}]);
Route::post('/register', ['middleware' => 'register' , 'uses' => 'WebController@postRegister']);