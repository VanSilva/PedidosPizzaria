<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entregador;
use App\Http\Requests\EntregadorRequest;

class EntregadoresController extends Controller
{
    public function index(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $entregadores = Entregador::orderBy('nome')->paginate(6);
        else
            $entregadores = Entregador::where('nome','like','%'.$filtragem.'%')
                ->orderBy("nome")
                ->paginate(6)
                ->setpath('entregadores?desc_filtro='.$filtragem);

        return view("entregadores.index", ['entregadores'=>$entregadores]);
    }

    public function create() {
        return view('entregadores.create');
    }

	public function destroy($id) {
		try {
		    Entregador::find($id)->delete();
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
