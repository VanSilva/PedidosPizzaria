<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\Http\Requests\PizzaRequest;
use App\Ingrediente;
use App\PizzaIngrediente;

class PizzasController extends Controller
{
    public function index(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $pizzas = Pizza::orderBy('sabor')->paginate(6);
        else
            $pizzas = Pizza::where('sabor','like','%'.$filtragem.'%')
                ->orderBy("sabor")
                ->paginate(6)
                ->setpath('pizzas?desc_filtro='.$filtragem);
        return view("pizzas.index", ['pizzas'=>$pizzas]);
    }

    public function create() {
        return view('pizzas.create');
    }
    
	public function destroy($id) {
		try {
		    Pizza::find($id)->delete();
			$ret = array('status'=>200, 'msg'=>"null");
		} catch (\Illuminate\Database\QueryException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		} 
		catch (\PDOException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		return $ret;
    }

    public function edit(Request $request) {
       $lista_ingredientes = Ingrediente::all();
       $pizza = Pizza::find(\Crypt::decrypt($request->get('id')));
       $ingredientes = $pizza->ingredientes;

       return view('pizzas.edit', compact('pizza') , ['ingredientes' => $ingredientes , 'lista_ingredientes' => $lista_ingredientes]);
    }

    public function update(Request $request, $id) {
        Pizza::find($id)->update($request->all());

        PizzaIngrediente::where('pizza_id', $id)->delete();
        $ingredientes = $request->ingredientes;
        foreach($ingredientes as $i => $value) {
            PizzaIngrediente::create([
                'pizza_id' => $id,
                'ingrediente_id' => $ingredientes[$i]
            ]);
        }
        return redirect()->route('pizzas');
    }

    public function store(Request $request){
        $pizza = Pizza::create([
                            'sabor' => $request->get('sabor')
                        ]);

        $ingredientes = $request->ingredientes;
        foreach($ingredientes as $a => $value) {
            PizzaIngrediente::create([
                            'pizza_id' => $pizza->id,
                            'ingrediente_id' => $ingredientes[$a]
                        ]);
        }

        return redirect()->route('pizzas');
    }

}
