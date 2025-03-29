<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //tipo de clientes
        $tipoClientes = [
            [
                'nombre' => 'Cliente',
                'created_at' => date_create('now')->format('Y-m-d H:i:s'),
                'updated_at' => date_create('now')->format('Y-m-d H:i:s')
            ],
            [
                'nombre' => 'Inquilino Cliente',
                'created_at' => date_create('now')->format('Y-m-d H:i:s'),
                'updated_at' => date_create('now')->format('Y-m-d H:i:s')
            ]
        ];
        \DB::table('tipo_clientes')->insert($tipoClientes);
    }
}
