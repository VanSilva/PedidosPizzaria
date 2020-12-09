<?php

use App\Ingrediente;
use Illuminate\Database\Seeder;


class IngredienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ingrediente::create(['descr' => 'Tomate']);
        Ingrediente::create(['descr' => 'Cebola']);
        Ingrediente::create(['descr' => 'Alho']);
        Ingrediente::create(['descr' => 'Carne']);
        Ingrediente::create(['descr' => 'Frango']);
        Ingrediente::create(['descr' => 'Batata Palha']);
    }
}
