<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;
use App\Http\Requests\FuncionarioRequest;

class FuncionariosController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::All();
        return view("funcionarios.index", ['funcionarios'=>$funcionarios]);
    }

    public function create() {
        return view('funcionarios.create');
    }

    public function destroy($id) {
        Funcionario::find($id)->delete();
        return redirect('funcionarios');
    }

    public function store(FuncionarioRequest $request) {
        $novo_funcionario = $request->all();
        Funcionario::create($novo_funcionario);

        return redirect('funcionarios');
    }
}
