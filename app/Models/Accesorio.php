<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accesorio extends Model
{
    /** @use HasFactory<\Database\Factories\AccesorioFactory> */
    use HasFactory;
    protected $table = "accesorios";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nombre',
        'marca',
        'detalle',
        'precio',
        'isUse',
        'created_at',
        'updated_at'
    ];
}
