<?php

Route::resourceVerbs([
    'create' => 'cadastro',
    'edit' => 'editar'
]);

Route::get('/', function () {
    return view('welcome');
});

// Route::view('/form', 'form');

// Route::post('/user/postData', 'UserController@postData');

// Route::put('/user/putData', 'UserController@putData');
Route::resource('posts', 'PostController');

Route::resource('user', 'userController')->only(['index', 'postData', 'putData']);