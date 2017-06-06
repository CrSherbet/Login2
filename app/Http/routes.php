<?php


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

Route::get('/register', ['middleware' => 'isLogin', function(){
    return view('layouts.register');
}]);
Route::post('/register', ['middleware' => 'register' , 'uses' => 'WebController@postRegister']);

Route::get('/insertHero', function(){
    return view('layouts.insertHero');
});

Route::post('/insertHero', 'WebController@insertHero');
Route::get('/delHero/{name}', 'WebController@delHero');

Route::get('/main#{id}', function($id){
    echo $id;
});

Route::get('/showDetail/{name}', 'WebController@showDetail');
Route::get('/editHero/{name}', 'WebController@showEditHeroForm');

Route::post('/editHero/{name}', 'WebController@editHero');