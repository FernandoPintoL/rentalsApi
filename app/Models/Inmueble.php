<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    /** @use HasFactory<\Database\Factories\InmuebleFactory> */
    use HasFactory;
    protected $table = "inmuebles";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'propietario_id',
        'nombre',
        'detalle',
        'num_habitacion',
        'num_piso',
        'precio',
        'isOcupado',
        'accesorio_id',
        'tipo_inmueble_id',
        'created_at',
        'updated_at'
    ];
}
