<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $table = "pedidos";
    protected $fillable = [
        'pizza_id',
        'entregador_id',
        'funcionario_id',
        'nome_cliente',
        'horario',
        'endereco'
    ];

    public function pizza() {
        return $this->belongsTo("App\Pizza");
    }
    public function entregador() {
        return $this->belongsTo("App\Entregador");
    }
    public function funcionario() {
        return $this->belongsTo("App\Funcionario");
    }
}
