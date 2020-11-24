<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/imoveis', 'PropertyController@index');

Route::get('/imoveis/novo', 'PropertyController@create');

Route::post('/imoveis/cadastrar', 'PropertyController@store');

Route::get('/imoveis/excluir/{id}', 'PropertyController@remove');

Route::get('/imoveis/editar/{id}', 'PropertyController@edit');

Route::post('/imoveis/atualizar', 'PropertyController@update');