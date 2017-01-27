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
    Route::put('/sidebar', ['uses' => 'Admin\AdminController@sideBar', 'as' => 'admin.sideBar']);

    //Pages
    Route::get('/pages', ['uses' => 'Admin\PageController@all', 'as' => 'admin.page.all']);
    Route::group(['prefix' => 'page'], function()
    {
        Route::get('/crete', ['uses' => 'Admin\PageController@new', 'as' => 'admin.page.new']);
        Route::post('/crete', ['uses' => 'Admin\PageController@create', 'as' => 'admin.page.create']);
        Route::get('/edit/{id}', ['uses' => 'Admin\PageController@edit', 'as' => 'admin.page.edit'])
            ->where('id', '[0-9]+');
        Route::put('/edit/{id}', ['uses' => 'Admin\PageController@update', 'as' => 'admin.page.update'])
            ->where('id', '[0-9]+');
        Route::delete('/delete/{id}', ['uses' => 'Admin\PageController@delete', 'as' => 'admin.page.delete'])
            ->where('id', '[0-9]+');
    });


    //Content
    Route::get('/content', ['uses' => 'Admin\ContentController@all', 'as' => 'admin.content.all']);
    Route::group(['prefix' => 'content'], function()
    {
        Route::get('/crete', ['uses' => 'Admin\ContentController@new', 'as' => 'admin.content.new']);
        Route::post('/crete', ['uses' => 'Admin\ContentController@create', 'as' => 'admin.content.create']);
        Route::get('/edit/{id}', ['uses' => 'Admin\ContentController@edit', 'as' => 'admin.content.edit'])
            ->where('id', '[0-9]+');
        Route::put('/edit/{id}', ['uses' => 'Admin\ContentController@update', 'as' => 'admin.content.update'])
            ->where('id', '[0-9]+');
        Route::delete('/delete/{id}', ['uses' => 'Admin\ContentController@delete', 'as' => 'admin.content.delete'])
            ->where('id', '[0-9]+');
    });

});


