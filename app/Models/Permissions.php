<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    /** @use HasFactory<\Database\Factories\PermissionsFactory> */
    use HasFactory;
    protected $table = "permissions";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'name',
        'guard_name',
        'created_at',
        'updated_at'
    ];
}
