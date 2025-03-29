<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InmuebleAccesorio extends Model
{
    /** @use HasFactory<\Database\Factories\InmuebleAccesorioFactory> */
    use HasFactory;
    protected $table = "inmueble_accesorios";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'inmueble_id',
        'accesorio_id',
        'cantidad',
        'created_at',
        'updated_at'
    ];
}
