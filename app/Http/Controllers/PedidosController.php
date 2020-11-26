<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pedido;
use App\Http\Requests\PedidoRequest;

class PedidosController extends Controller
{
    public function index() {
        $pedidos = Pedido::orderBy('horario')->paginate(5);;
        return view("pedidos.index", ['pedidos'=>$pedidos]);
    }

    public function create() {
        return view('pedidos.create');
    }

    public function destroy($id) {
        Pedido::find($id)->delete();
        return redirect()->route('pedidos');
    }

    public function edit($id) {
        $pedido = Pedido::find($id);
        return view('pedidos.edit', compact('pedido'));
    }

    public function update(PedidoRequest $request, $id) {
        Pedido::find($id)->update($request->all());
        return redirect()->route('pedidos');
    }

    public function store(PedidoRequest $request) {
        $novo_pedido = $request->all();
        Pedido::create($novo_pedido);
        return redirect()->route('pedidos');
    }
}
