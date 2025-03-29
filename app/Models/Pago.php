<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    /** @use HasFactory<\Database\Factories\PagoFactory> */
    use HasFactory;
    protected $table = "pagos";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'contrato_id',
        'fecha_pago',
        'monto',
        'estado',
        'created_at',
        'updated_at'
    ];
}
