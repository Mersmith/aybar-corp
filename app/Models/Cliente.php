<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cliente extends Model
{
    /** @use HasFactory<\Database\Factories\ClienteFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'cuc',
        'codigo_cliente',
        'nombre_completo',
        'dni',
        'telefono_principal',
        'telefono_alternativo',
        'correo_electronico'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
