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


        DB::table('rols')->insert([
            'nombre' => 'Empleados',
            'estado' => true
        ]);

        DB::table('users')->insert([
            'nombre' => 'admin',
            'email' => 'admin',
            'password' =>  bcrypt('admin'),
            'idrol' => 1
        ]);


        DB::table('empleados')->insert([
            'nombre' => 'Juan',
            'apellido' => 'Perez',
            'cui' => 'N-3243423',
            'email' => 'perez@gmail.com',
            'edad' => '12',
            'direccion' => 'Guatemala'
        ]);
      
        //INSERTANDO CATEGORIAS POR DEFECTO
        DB::table('categorias')->insert([
            'nombre' => 'Calzado',
            'descripcion' => 'Todo lo necesario para el calzado'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Accesorios',
            'descripcion' => 'Todo lo necesario para agregar al Estilo'
        ]);

        //INSERTANDO PRODUCTOS
        DB::table('productos')->insert([
            'nombre' => 'Zapatos Flexi',
            'descripcion' => 'Zapatos color Negros de Marca Flexi',
            'talla' => '8',
            'img' => 'AUN NO DISPONIBLE',
            'precio' => 550.00,
            'idcategoria' => 1
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Tenis Adidas',
            'descripcion' => 'Tennis de Deporte Marca Adidas',
            'talla' => '8',
            'img' => 'AUN NO DISPONIBLE',
            'precio' => 2500.00,
            'idcategoria' => 1
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Gorra Gap',
            'descripcion' => 'Accesorio Gap',
            'talla' => 'Mediano',
            'img' => 'AUN NO DISPONIBLE',
            'precio' => 235.00,
            'idcategoria' => 2
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Bufanda',
            'descripcion' => 'Accesorio para Acompanamiento',
            'talla' => 'Small',
            'img' => 'AUN NO DISPONIBLE',
            'precio' => 150.00,
            'idcategoria' => 2 
        ]);
    }
}
