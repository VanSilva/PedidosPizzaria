<?php

use Illuminate\Support\Facades\Route;


Route::get('funcionarios', 'funcionariosController@index');
Route::get('entregadores', 'entregadoresController@index');
Route::get('ingredientes', 'ingredientesController@index');
