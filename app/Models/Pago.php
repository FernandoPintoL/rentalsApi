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
        'historial_acciones',
        'blockchain_id',
        'created_at',
        'updated_at'
    ];
    public function contrato()
    {
        return $this->belongsTo(Contrato::class, 'contrato_id', 'id');
    }
}
