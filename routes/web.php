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

    Route::get('/', ['uses' => 'Admin\AdminController@index']);

    //Pages
    Route::get('/pages', ['uses' => 'Admin\PageController@allPages', 'as' => 'admin.allPages']);
    Route::get('/page/crete', ['uses' => 'Admin\PageController@newPage', 'as' => 'admin.newPage']);
    Route::post('/page/crete', ['uses' => 'Admin\PageController@createPage', 'as' => 'admin.createPage']);
    Route::get('/page/edit/{id}', ['uses' => 'Admin\PageController@editPage', 'as' => 'admin.editPage'])
        ->where('id', '[0-9]+');
    Route::put('/page/edit/{id}', ['uses' => 'Admin\PageController@updatePage', 'as' => 'admin.updatePage'])
        ->where('id', '[0-9]+');


});


