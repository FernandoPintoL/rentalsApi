<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory;
    protected $table = "clientes";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'nombre',
        'num_id',
        'telefono',
        'email',
        'photo_path',
        'user_id',
        'created_at',
        'updated_at'
    ];
}
