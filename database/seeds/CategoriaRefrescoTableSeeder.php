<?php

use Illuminate\Database\Seeder;
use App\CategoriaRefresco;

class CategoriaRefrescoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cats = [
            'mini',
            'popular',
            'familiar',
            'gorda'
        ];
        foreach ($cats as $categoria) {
            CategoriaRefresco::create(
                [
                    'nombre' => $categoria,
                    'contenido' => 'contenido'
                ]
            );
        }
    }
}
