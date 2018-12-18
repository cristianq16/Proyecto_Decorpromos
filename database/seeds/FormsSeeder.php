<?php

use Illuminate\Database\Seeder;
use App\Form;

class FormsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        //$usos = DB::select('SELECT id FROM usos WHERE uso =? LIMIT 0,1',['Residencial / Hogar']);
        //dd();
        //$usos = DB::table('usos')->select('id')->take(3)->get();
        //$uso = Usos::where('uso', 'Residencial / Hogar')->value('id');

        Form::create([
            'nombre' => 'Cristian Camargo',
            'ciudad' => 'Barranquilla',
            'barrio' => 'Mercedes',
            'telefono' => '3192220416',
            'email' => 'Cristiancq16@gmail.com',
            'opcion' => 'si',
            'usos' => 'Residencial / Hogar',
            'informacion' => 'Cortina sheer elegance'
        ]);

        Form::create([
            'nombre' => 'Daniela calderon',
            'ciudad' => 'Bogota',
            'barrio' => 'Maranta',
            'telefono' => '3008505434',
            'email' => 'litha-@gmail.com',
            'opcion' => 'si',
            'usos' => 'Comercial / Almacén/ Local',
            'informacion' => 'Cortina sheer elegance fefefefef'
        ]);

        //dd($usos[2]->id);
        // DB::table('cotizacion')->insert([
            
        // ]);
    }
}
