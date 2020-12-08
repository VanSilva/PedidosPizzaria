<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PizzaIngrediente extends Model
{
    protected $table = "pizza_ingredientes";
    protected $fillable = ['pizza_id', 'ingrediente_id'];

    public function ingrediente() {
        return $this->belongsTo("App\Ingrediente");
    }
}
