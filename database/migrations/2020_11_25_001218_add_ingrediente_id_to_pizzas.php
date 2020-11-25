<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIngredienteIdToPizzas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pizzas', function (Blueprint $table) {
            $table->bigInteger('ingrediente_id')->unsigned()->nullable();
            $table->foreign('ingrediente_id')->references('id')->on('ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pizzas', function (Blueprint $table) {
            //
        });
    }
}
