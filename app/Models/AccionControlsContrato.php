<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccionControlsContrato extends Model
{
    /** @use HasFactory<\Database\Factories\AccionControlsContratoFactory> */
    use HasFactory;
    protected $table = "acciones_controls";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'accion_contrato_id',
        'contrato_id',
        'detalle',
        'created_at',
        'updated_at'
    ];
}
