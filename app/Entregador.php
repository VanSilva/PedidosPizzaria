<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entregador extends Model
{
    protected $table = "entregadores";
    protected $fillable = ['nome'];

    public function pedido() {
        return $this->hasMany("App\Pedido");
    }
}
