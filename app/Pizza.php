<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    protected $table = "pizzas";
    protected $fillable = ['sabor', 'ingrediente_id'];


    public function ingrediente() {
        return $this->belongsTo("App\Ingrediente");
    }

}
