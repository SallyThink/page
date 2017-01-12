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
    Route::get('/pages', ['uses' => 'Admin\PageController@allPages', 'as' => 'admin.allPages']);
    Route::get('/page/crete', ['uses' => 'Admin\PageController@newPage', 'as' => 'admin.newPage']);
    Route::post('/page/crete', ['uses' => 'Admin\PageController@createPage', 'as' => 'admin.createPage']);
    Route::get('/page/edit/{id}', ['uses' => 'Admin\PageController@editPage', 'as' => 'admin.editPage'])
        ->where('id', '[0-9]+');
    Route::put('/page/edit/{id}', ['uses' => 'Admin\PageController@updatePage', 'as' => 'admin.updatePage'])
        ->where('id', '[0-9]+');

    //Content
    Route::get('/content', ['uses' => 'Admin\ContentController@allContent', 'as' => 'admin.allContent']);
    Route::get('/content/crete', ['uses' => 'Admin\ContentController@newContent', 'as' => 'admin.newContent']);
    Route::post('/content/crete', ['uses' => 'Admin\ContentController@createContent', 'as' => 'admin.createContent']);
    Route::get('/content/edit/{id}', ['uses' => 'Admin\ContentController@editContent', 'as' => 'admin.editContent'])
        ->where('id', '[0-9]+');
    Route::put('/content/edit/{id}', ['uses' => 'Admin\ContentController@updateContent', 'as' => 'admin.updateContent'])
        ->where('id', '[0-9]+');

});


