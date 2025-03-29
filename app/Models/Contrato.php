<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    /** @use HasFactory<\Database\Factories\ContratoFactory> */
    use HasFactory;
    protected $table = "contratos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'inmueble_id',
        'propietario_id',
        'cliente_id',
        'tipo_cliente_id',
        'fecha_inicio',
        'fecha_fin',
        'monto',
        'blockchain_id',
        'detalle',
        'created_at',
        'updated_at'
    ];
}
