<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntregadoresController extends Controller
{
    public function index() {
        $nome = 'José';
        return view("entregadores", ['nome'=>$nome]);
    }
}
