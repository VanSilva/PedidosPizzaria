<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entregador;

class EntregadoresController extends Controller
{
    public function index() {
        $entregadores = Entregador::All();
        return view("entregadores", ['entregadores'=>$entregadores]);
    }
}
