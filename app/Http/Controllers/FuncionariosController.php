<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    public function index() {
        $nome = 'Maria';
        return view("funcionarios", ['nome'=>$nome]);
    }
}
