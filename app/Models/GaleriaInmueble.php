<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GaleriaInmueble extends Model
{
    /** @use HasFactory<\Database\Factories\GaleriaInmuebleFactory> */
    use HasFactory;
    protected $table = "galeria_inmuebles";
    protected $primaryKey = "id";
    public $timestamps = true;
    protected $fillable = [
        'inmueble_id',
        'photo_path',
        'created_at',
        'updated_at'
    ];
    public function inmueble()
    {
        return $this->belongsTo(Inmueble::class, 'inmueble_id', 'id');
    }

}
