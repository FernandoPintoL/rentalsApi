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
        'user_id',
        'nombre',
        'detalle',
        'num_habitacion',
        'num_piso',
        'precio',
        'isOcupado',
        'accesorios',
        'servicios_basicos',
        'created_at',
        'updated_at'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function contratos()
    {
        return $this->hasMany(Contrato::class, 'inmueble_id', 'id');
    }
    public function galeria()
    {
        return $this->hasMany(GaleriaInmueble::class, 'inmueble_id', 'id');
    }
}
