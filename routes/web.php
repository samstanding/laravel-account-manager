<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'AccountsController@index');

Route::get('/accounts/create', 'AccountsController@create');

Route::post('/create', 'AccountsController@store');

Route::get('/accounts/types', 'TypesController@index');