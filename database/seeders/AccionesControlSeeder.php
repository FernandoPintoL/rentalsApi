<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccionesControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //acciones que se pueden realizar cuando un contrato de alquiler no es cumplido
        $acciones = [
            'Cerrar chapa de la puerta',
            'Realizar cortes de energias',
            'Enviar aviso de vencimiento',
            'Enviar aviso de deuda',
            'Enviar aviso de corte',
            'Enviar aviso de suspensión',
            'Llamar al cliente',
            'Enviar correo al cliente',
            'Enviar mensaje de texto al cliente',
            'Visitar al cliente',
            'Enviar carta de aviso',
            'Suspender el servicio',
            'Cancelar el contrato'
        ];
        foreach ($acciones as $accion) {
            \DB::table('acciones_control')->insert([
                'accion' => $accion,
                'created_at' => date_create('now')->format('Y-m-d H:i:s'),
                'updated_at' => date_create('now')->format('Y-m-d H:i:s')
            ]);
        }
    }
}
