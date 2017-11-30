<?php

use Illuminate\Database\Seeder;
use App\TipoRefresco;

class TipoRefrescoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tipos = [
            'Coca-Cola',
            'Sprite',
            'Fanta',
            'Simba',
            'Pepsi'
        ];
        foreach ($tipos as $tipo) {
            TipoRefresco::create(
                [
                    'nombre' => $tipo,
                    'imagen' => 'imagen'
                ]
            );
        }
    }
}
