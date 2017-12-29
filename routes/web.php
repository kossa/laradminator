<?php

// Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Auth::routes();

/*
|------------------------------------------------------------------------------------
| Admin
|------------------------------------------------------------------------------------
*/
Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:4']], function() {
    Route::get('/', ['uses'=>'CategoryController@index', 'as'=>'dash']);
    Route::resource('categories', 'CategoryController');
    Route::resource('users', 'UserController');
});

Route::get('/', function () {
    return view('welcome');
});


