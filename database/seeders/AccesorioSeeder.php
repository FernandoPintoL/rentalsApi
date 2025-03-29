<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccesorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //accesorios que se encuentran dentro de un inmueble
        $accesorios = [
            [
                'nombre' => 'Cama',
                'marca' => 'Marca A',
                'detalle' => 'Una cama de dos plazas',
                'precio' => 100.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Sofá',
                'marca' => 'Marca B',
                'detalle' => 'Un sofá de tres plazas',
                'precio' => 200.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Mesa',
                'marca' => 'Marca C',
                'detalle' => 'Una mesa de comedor',
                'precio' => 150.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Silla',
                'marca' => 'Marca D',
                'detalle' => 'Una silla de oficina',
                'precio' => 50.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Televisor',
                'marca' => 'Marca E',
                'detalle' => 'Un televisor de 55 pulgadas',
                'precio' => 500.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Refrigerador',
                'marca' => 'Marca F',
                'detalle' => 'Un refrigerador de dos puertas',
                'precio' => 800.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Lavadora',
                'marca' => 'Marca G',
                'detalle' => 'Una lavadora de carga frontal',
                'precio' => 600.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Horno Microondas',
                'marca' => 'Marca H',
                'detalle' => 'Un horno microondas de 20 litros',
                'precio' => 120.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Aire Acondicionado',
                'marca' => 'Marca I',
                'detalle' => 'Un aire acondicionado de ventana',
                'precio' => 1000.00,
                'en_uso' => true,
            ],
            [
                'nombre' => 'Ventilador',
                'marca' => 'Marca J',
                'detalle' => 'Un ventilador de pie',
                'precio' => 80.00,
                'en_uso' => true,
            ],

        ];
        // Insertar los accesorios en la tabla inmueble_accesorios
        \DB::table('accesorios')->insert($accesorios);
    }
}
