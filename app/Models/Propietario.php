<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    /** @use HasFactory<\Database\Factories\PropietarioFactory> */
    use HasFactory;
    protected $table = "propietarios";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nombre',
        'num_id',
        'direccion',
        'telefono',
        'email',
        'photo_path',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
