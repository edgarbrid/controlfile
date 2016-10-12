<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'nombre' => 'Administrador',
        	'documento' => '987654321',
        	'email'	=> 'admin@email.com',
        	'cargo' => 'Administrador de Sistema',
        	'usuario' => 'Admin',
        	'password' => bcrypt('Admin'),
        	'telefono' => '951357456',
        	'admin' => true,
        	'area_id' => 1,
        	'profesion_id' => 1
        	]);
    }
}
