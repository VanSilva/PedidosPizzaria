<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";
    protected $fillable = [
        'pizza',
        'entregador',
        'funcionario',
        'nome_cliente',
        'horario',
        'endereco'
    ];
}
