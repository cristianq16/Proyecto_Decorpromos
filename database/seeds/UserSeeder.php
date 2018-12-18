<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Cristian Camargo',
            'email' => 'Cristiancq16@gmail.com ',
            'password' => bcrypt('laravel')
        ]);

        User::create([
            'name' => 'Daniela calderon',
            'email' => 'litha-6@gmail.com ',
            'password' => bcrypt('laravel')
        ]);

        // DB::table('users')->insert([
        //     'name' => 'Cristian Camargo',
        //     'email' => 'Cristiancq16@gmail.com ',
        //     'password' => bcrypt('laravel')
        // ]);
    }
}
