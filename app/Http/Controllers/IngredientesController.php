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
    
    public function store(Request $request) {
        $novo_ingrediente = $request->all();
        Ingrediente::create($novo_ingrediente);

        return redirect('ingredientes');
    }
}
