<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/horizontal', ['uses' => 'IndexController@horizontal']);

Route::post('/form', ['uses' => 'FormController@post']);


