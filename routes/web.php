<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('welcome');
});

/**
 * GET all routes
 */
Route::group(['middleware'=> 'auth'], function() {
    Route::group(['prefix'=>'funcionarios', 'where'=>['id'=>'[0-9]']], function() {
        Route::any('',             ['as'=>'funcionarios',         'uses'=>'FuncionariosController@index'   ]);
        Route::get('create',       ['as'=>'funcionarios.create',  'uses'=>'FuncionariosController@create'  ]);
        Route::get('{id}/destroy', ['as'=>'funcionarios.destroy', 'uses'=>'FuncionariosController@destroy' ]);
        Route::get('{id}/edit',    ['as'=>'funcionarios.edit',    'uses'=>'FuncionariosController@edit'    ]);
        Route::put('{id}/update',  ['as'=>'funcionarios.update',  'uses'=>'FuncionariosController@update'  ]);
        Route::post('store',       ['as'=>'funcionarios.store',   'uses'=>'FuncionariosController@store'   ]);
    });

    Route::group(['prefix'=>'entregadores', 'where'=>['id'=>'[0-9]']], function() {
        Route::any('',             ['as'=>'entregadores',         'uses'=>'EntregadoresController@index'   ]);
        Route::get('create',       ['as'=>'entregadores.create',  'uses'=>'EntregadoresController@create'  ]);
        Route::get('{id}/destroy', ['as'=>'entregadores.destroy', 'uses'=>'EntregadoresController@destroy' ]);
        Route::get('{id}/edit',    ['as'=>'entregadores.edit',    'uses'=>'EntregadoresController@edit'    ]);
        Route::put('{id}/update',  ['as'=>'entregadores.update',  'uses'=>'EntregadoresController@update'  ]);
        Route::post('store',       ['as'=>'entregadores.store',   'uses'=>'EntregadoresController@store'   ]);
    });

    Route::group(['prefix'=>'pizzas', 'where'=>['id'=>'[0-9]']], function() {
        Route::any('',             ['as'=>'pizzas',         'uses'=>'PizzasController@index'   ]);
        Route::get('create',       ['as'=>'pizzas.create',  'uses'=>'PizzasController@create'  ]);
        Route::get('{id}/destroy', ['as'=>'pizzas.destroy', 'uses'=>'PizzasController@destroy' ]);
        Route::get('{id}/edit',    ['as'=>'pizzas.edit',    'uses'=>'PizzasController@edit'    ]);
        Route::put('{id}/update',  ['as'=>'pizzas.update',  'uses'=>'PizzasController@update'  ]);
        Route::post('store',       ['as'=>'pizzas.store',   'uses'=>'PizzasController@store'   ]);
    });

    Route::group(['prefix'=>'ingredientes', 'where'=>['id'=>'[0-9]']], function() {
        Route::any('',             ['as'=>'ingredientes',         'uses'=>'IngredientesController@index'   ]);
        Route::get('create',       ['as'=>'ingredientes.create',  'uses'=>'IngredientesController@create'  ]);
        Route::get('{id}/destroy', ['as'=>'ingredientes.destroy', 'uses'=>'IngredientesController@destroy' ]);
        Route::get('edit/{id}',    ['as'=>'ingredientes.edit',    'uses'=>'IngredientesController@edit'    ]);
        Route::put('{id}/update',  ['as'=>'ingredientes.update',  'uses'=>'IngredientesController@update'  ]);
        Route::post('store',       ['as'=>'ingredientes.store',   'uses'=>'IngredientesController@store'   ]);
    });

    Route::group(['prefix'=>'pedidos', 'where'=>['id'=>'[0-9]']], function() {
        Route::any('',             ['as'=>'pedidos',         'uses'=>'PedidosController@index'   ]);
        Route::get('create',       ['as'=>'pedidos.create',  'uses'=>'PedidosController@create'  ]);
        Route::get('{id}/destroy', ['as'=>'pedidos.destroy', 'uses'=>'PedidosController@destroy' ]);
        Route::get('edit/{id}',    ['as'=>'pedidos.edit',    'uses'=>'PedidosController@edit'    ]);
        Route::put('{id}/update',  ['as'=>'pedidos.update',  'uses'=>'PedidosController@update'  ]);
        Route::post('store',       ['as'=>'pedidos.store',   'uses'=>'PedidosController@store'   ]);
    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
