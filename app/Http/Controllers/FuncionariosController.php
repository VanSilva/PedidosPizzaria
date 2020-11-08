<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Funcionario;

class FuncionariosController extends Controller
{
    public function index() {
        $funcionarios = Funcionario::All();
        return view("funcionarios", ['funcionarios'=>$funcionarios]);
    }
}
