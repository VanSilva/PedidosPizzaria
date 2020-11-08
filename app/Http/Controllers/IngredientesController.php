<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientesController extends Controller
{
    public function index() {
        $descr = 'Tomate';
        return view("ingredientes", ['descr'=>$descr]);
    }
}
