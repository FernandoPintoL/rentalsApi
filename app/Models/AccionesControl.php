<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccionesControl extends Model
{
    /** @use HasFactory<\Database\Factories\AccionesControlFactory> */
    use HasFactory;
    protected $table = "acciones_controls";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'accion',
        'detalle',
        'created_at',
        'updated_at'
    ];
}
