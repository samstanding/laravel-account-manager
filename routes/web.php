<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'AccountsController@index');

Route::get('/accounts/create', 'AccountsController@create')->name('create');

Route::post('/create', 'AccountsController@store');

//is this working??
Route::get('/accounts/{$id}', 'AccountsController@show');

Route::get('/accounts/types', 'TypesController@index')->name('types');

Route::get('/types/{type}', 'TypesController@show');

