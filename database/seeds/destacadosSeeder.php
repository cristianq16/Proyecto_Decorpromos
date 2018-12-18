<?php

use Illuminate\Database\Seeder;
use App\TrabajosDestacados;

class destacadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TrabajosDestacados::create([
            'titulo' => 'Cristian Camargo',
            'descripcion' => 'jidjijijeijjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj djeduuedhudhednjeidoñfñsojxjmvx prjirgoge',
            'imagen' => 'image2.jpg'

        ]);
    }
}
