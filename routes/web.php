<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/horizontal', ['uses' => 'IndexController@horizontal']);

Route::get('/page', ['uses' => 'IndexController@page']);

Route::post('/form', ['uses' => 'FormController@post']);


