<?php

Route::get('/', function () {
    return view('welcome');
});

Route::view('/form', 'form');

Route::post('/user/postData', 'UserController@postData');

Route::put('/user/putData', 'UserController@putData');