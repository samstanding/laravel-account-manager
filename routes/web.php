<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/accounts', 'AccountsController@index');

Route::get('/accounts/create', 'AccountsController@create');

Route::post('/create', 'AccountsController@store');

