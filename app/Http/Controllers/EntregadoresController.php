<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entregador;

class EntregadoresController extends Controller
{
    public function index() {
        $entregadores = Entregador::All();
        return view("entregadores.index", ['entregadores'=>$entregadores]);
    }

    public function create() {
        return view('entregadores.create');
    }
    
    public function store(Request $request) {
        $novo_entregador = $request->all();
        Entregador::create($novo_entregador);

        return redirect('entregadores');
    }
}
