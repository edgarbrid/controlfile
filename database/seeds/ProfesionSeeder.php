<?php

use Illuminate\Database\Seeder;

class ProfesionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesiones')->insert([
        	'profesion' => 'Administrador de sistemas'
        	]);
    }
}
