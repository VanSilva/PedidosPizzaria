<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;
use App\Http\Requests\IngredienteRequest;

class IngredientesController extends Controller
{
    public function index(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $ingredientes = Ingrediente::orderBy('descr')->paginate(6);
        else
            $ingredientes = Ingrediente::where('descr','like','%'.$filtragem.'%')
                ->orderBy("descr")
                ->paginate(6)
                ->setpath('ingredientes?desc_filtro='.$filtragem);
        $ingredientes = Ingrediente::orderBy('descr')->paginate(5);
        return view("ingredientes.index", ['ingredientes'=>$ingredientes]);
    }

    public function create() {
        return view('ingredientes.create');
    }

	public function destroy($id) {
		try {
		    Ingrediente::find($id)->delete();
			$ret = array('status'=>200, 'msg'=>"null");
		} catch (\Illuminate\Database\QueryException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		} 
		catch (\PDOException $e) {
			$ret = array('status'=>500, 'msg'=>$e->getMessage());
		}
		return $ret;
	}

    public function edit($id) {
        $ingrediente = Ingrediente::find($id);
        return view('ingredientes.edit', compact('ingrediente'));
    }

    public function update(IngredienteRequest $request, $id) {
        Ingrediente::find($id)->update($request->all());
        return redirect()->route('ingredientes');
    }

    public function store(IngredienteRequest $request) {
        $novo_ingrediente = $request->all();
        Ingrediente::create($novo_ingrediente);
        return redirect()->route('ingredientes');
    }
}
