<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoComprobantePago extends Model
{
    /** @use HasFactory<\Database\Factories\EstadoComprobantePagoFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'nombre',
        'color',
        'icono',
        'activo',
    ];

    public function comprobantes()
    {
        return $this->hasMany(ComprobantePago::class);
    }
}
