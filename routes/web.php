<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//for accounts table
Route::get('/home', 'AccountsController@index');
//for accounts form
Route::get('/accounts/create', 'AccountsController@create')->name('create');
//posts accounts form to db
Route::post('/create', 'AccountsController@store');
//for account types by type
Route::get('/accounts/types', 'TypesController@index')->name('types');
//view by type
Route::get('/types/{type}', 'TypesController@type');
//each account view
Route::get('/accounts/{id}', 'AccountsController@view');
//route to save the new account type 
Route::patch('/accounts/{account}/edit, AccountsController@update');