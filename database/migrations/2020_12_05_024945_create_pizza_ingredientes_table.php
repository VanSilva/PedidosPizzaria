<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePizzaIngredientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pizza_ingredientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('pizza_id')->unsigned()->nullable();
            $table->foreign('pizza_id')->references('id')->on('pizzas');
            $table->bigInteger('ingrediente_id')->unsigned()->nullable();
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pizza_ingredientes');
    }
}
