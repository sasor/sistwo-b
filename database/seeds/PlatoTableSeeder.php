<?php

use Illuminate\Database\Seeder;
use App\Plato;

class PlatoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $platos = [
            'economico',
            'cuarto',
            'medio',
            'entero'
        ];

        foreach ($platos as $key => $plato) {
            Plato::create([
                'nombre' => $plato,
                'porcion' => $key,
                'precio' => 12,
                'descripcion' => 'descripcion del plato de pollo',
                'imagen' => 'imagen del plato de pollo'
            ]); 
        }
    }
}
