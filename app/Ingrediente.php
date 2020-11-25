<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ingrediente extends Model
{
    protected $table = "ingredientes";
    protected  $fillable = ['descr'];

    
    public function pizzas() {
        return $this->hasMany("App\Pizza");
    }
}
