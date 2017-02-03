<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/horizontal', ['uses' => 'IndexController@horizontal']);

Route::get('/page', ['uses' => 'IndexController@page']);
Route::get('/owl', ['uses' => 'IndexController@owl']);

Route::post('/form', ['uses' => 'FormController@post']);

Route::group(['prefix' => 'admin2'], function()
{

    Route::get('/', ['uses' => 'Admin\IndexController@index']);
    Route::put('/sidebar', ['uses' => 'Admin\IndexController@sideBar', 'as' => 'admin.sideBar']);


    Route::get('/{name}', ['uses' => 'Admin\AdminController@all', 'as' => 'admin.all']);
    Route::get('/{name}/create', ['uses' => 'Admin\AdminController@new', 'as' => 'admin.new']);
    Route::post('/{name}/create', ['uses' => 'Admin\AdminController@create', 'as' => 'admin.create']);
    Route::get('/{name}/edit/{id}', ['uses' => 'Admin\AdminController@edit', 'as' => 'admin.edit']);
    Route::put('/{name}/edit/{id}', ['uses' => 'Admin\AdminController@update', 'as' => 'admin.update']);
    Route::delete('/{name}/delete/{id}', ['uses' => 'Admin\AdminController@delete', 'as' => 'admin.delete']);


});


