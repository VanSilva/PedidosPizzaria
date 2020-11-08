<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

/**
 * GET all routes
 */
Route::get('funcionarios', 'funcionariosController@index');
Route::get('entregadores', 'entregadoresController@index');
Route::get('ingredientes', 'ingredientesController@index');

/**
 * CREATE routes
 */
Route::get('funcionarios/create', 'FuncionariosController@create');
Route::get('entregadores/create', 'EntregadoresController@create');
Route::get('ingredientes/create', 'IngredientesController@create');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
