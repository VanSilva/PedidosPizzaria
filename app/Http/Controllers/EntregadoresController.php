<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entregador;
use App\Http\Requests\EntregadorRequest;

class EntregadoresController extends Controller
{
    public function index() {
        $entregadores = Entregador::All();
        return view("entregadores.index", ['entregadores'=>$entregadores]);
    }

    public function create() {
        return view('entregadores.create');
    }

    public function destroy($id) {
        Entregador::find($id)->delete();
        return redirect()->route('entregadores');
    }

    public function edit($id) {
        $entregador = Entregador::find($id);
        return view('entregadores.edit', compact('entregador'));
    }

    public function update(EntregadorRequest $request, $id) {
        Entregador::find($id)->update($request->all());
        return redirect()->route('entregadores');
    }
    
    public function store(EntregadorRequest $request) {
        $novo_entregador = $request->all();
        Entregador::create($novo_entregador);
        return redirect()->route('entregadores');
    }
}
