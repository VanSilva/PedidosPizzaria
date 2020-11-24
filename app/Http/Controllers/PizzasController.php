<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Http\Requests\PizzaRequest;

class PizzasController extends Controller
{
    public function index() {
        $pizzas = Pizza::orderBy('sabor')->paginate(5);;
        return view("pizzas.index", ['pizzas'=>$pizzas]);
    }

    public function create() {
        return view('pizzas.create');
    }
    
    public function destroy($id) {
        Pizza::find($id)->delete();
        return redirect()->route('pizzas');
    }

    public function edit($id) {
        $pizza = Pizza::find($id);
        return view('pizzas.edit', compact('pizza'));
    }

    public function update(PizzaRequest $request, $id) {
        Pizza::find($id)->update($request->all());
        return redirect()->route('pizzas');
    }

    public function store(PizzaRequest $request) {
        $novo_pizza = $request->all();
        Pizza::create($novo_pizza);

        return redirect()->route('pizzas');
    }

}
