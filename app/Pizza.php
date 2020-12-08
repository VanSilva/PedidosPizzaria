<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = "pizzas";
    protected $fillable = ['sabor'];


    public function ingredientes() {
        return $this->hasMany("App\PizzaIngrediente");
    }

    public function pedido() {
        return $this->hasMany("App\Pedido");
    }

}
