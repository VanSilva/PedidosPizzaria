<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;

class IngredientesController extends Controller
{
    public function index() {
        $ingredientes = Ingrediente::All();
        return view("ingredientes.index", ['ingredientes'=>$ingredientes]);
    }

    public function create() {
        return view('ingredientes.create');
    }
}
