<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('rols')->insert([
            'nombre' => 'Administrador',
            'estado' => true
        ]);

        DB::table('rols')->insert([
            'nombre' => 'Cliente',
            'estado' => true
        ]);

        DB::table('users')->insert([
            'nombre' => 'admin',
            'email' => 'admin',
            'password' =>  bcrypt('admin'),
            'idrol' => 1
        ]);
    }
}
