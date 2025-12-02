<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class UnidadNegocio extends Model
{
    /** @use HasFactory<\Database\Factories\UnidadNegocioFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = ['nombre', 'razon_social'];

    public function proyectos()
    {
        return $this->hasMany(Proyecto::class);
    }

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class, 'cliente_unidad_negocio')
            ->withPivot(['codigo', 'id_empresa'])
            ->withTimestamps();
    }
}
