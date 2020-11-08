<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionariosController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::All();
        return view("funcionarios.index", ['funcionarios'=>$funcionarios]);
    }

    public function create() {
        return view('funcionarios.create');
    }

    public function store(Request $request) {
        $novo_funcionario = $request->all();
        Funcionario::create($novo_funcionario);

        return redirect('funcionarios');
    }
}
