<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;
use App\Http\Requests\IngredienteRequest;

class IngredientesController extends Controller
{
    public function index() {
        $ingredientes = Ingrediente::All();
        return view("ingredientes.index", ['ingredientes'=>$ingredientes]);
    }

    public function create() {
        return view('ingredientes.create');
    }

    public function destroy($id) {
        Ingrediente::find($id)->delete();
        return redirect('ingredientes');
    }
    
    public function store(IngredienteRequest $request) {
        $novo_ingrediente = $request->all();
        Ingrediente::create($novo_ingrediente);

        return redirect('ingredientes');
    }
}
