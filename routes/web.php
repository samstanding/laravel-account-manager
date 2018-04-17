<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'AccountsController@index');

Route::get('/accounts/create', 'AccountsController@create')->name('create');

Route::post('/create', 'AccountsController@store');

Route::get('/accounts/types', 'TypesController@index')->name('types');

//this route is not routing to me to the right controller-- or at least thats how it appears
// Route::get('/accounts/{$id}', 'AccountsController@account');

// Route::get('/types/{type}', 'TypesController@type');

// Route::get('/accounts/{$id}/edit', 'AccountsController@edit');

Route::patch('/accounts/{account}, AccountsController@update');