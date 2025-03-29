<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCliente extends Model
{
    /** @use HasFactory<\Database\Factories\TipoClienteFactory> */
    use HasFactory;
    protected $table = "tipo_clientes";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nombre',
        'detalle',
        'created_at',
        'updated_at'
    ];
}
