<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\FuncionarioRequest;

class FuncionariosController extends Controller
{
    public function index(Request $filtro) {
        $filtragem = $filtro->get('desc_filtro');
        if ($filtragem == null)
            $funcionarios = Funcionario::orderBy('nome')->paginate(6);
        else
            $funcionarios = Funcionario::where('nome','like','%'.$filtragem.'%')
                ->orderBy("nome")
                ->paginate(6)
                ->setpath('funcionarios?desc_filtro='.$filtragem);
        return view("funcionarios.index", ['funcionarios'=>$funcionarios]);
    }

    public function create() {
        return view('funcionarios.create');
    }

	public function destroy($id) {
		try {
		    Funcionario::find($id)->delete();
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
        $funcionario = Funcionario::find($id);
        return view('funcionarios.edit', compact('funcionario'));
    }

    public function update(FuncionarioRequest $request, $id) {
        Funcionario::find($id)->update($request->all());
        return redirect()->route('funcionarios');
    }

    public function store(FuncionarioRequest $request) {
        $novo_funcionario = $request->all();
        Funcionario::create($novo_funcionario);
        return redirect()->route('funcionarios');
    }
}
