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
 * GET create routes
 */
Route::get('funcionarios/create', 'FuncionariosController@create');
Route::get('entregadores/create', 'EntregadoresController@create');
Route::get('ingredientes/create', 'IngredientesController@create');

/**
 * POST routes
 */
Route::post('funcionarios/store', 'FuncionariosController@store');
Route::post('entregadores/store', 'EntregadoresController@store');
Route::post('ingredientes/store', 'IngredientesController@store');

/**
 * DELETE routes
 */
Route::get('funcionarios/{id}/destroy', 'FuncionariosController@destroy');
Route::get('entregadores/{id}/destroy', 'EntregadoresController@destroy');
Route::get('ingredientes/{id}/destroy', 'IngredientesController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
