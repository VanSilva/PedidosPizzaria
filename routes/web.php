<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

Route::get('funcionarios', 'funcionariosController@index');
Route::get('entregadores', 'entregadoresController@index');
Route::get('ingredientes', 'ingredientesController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
