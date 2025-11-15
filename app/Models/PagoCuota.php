<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PagoCuota extends Model
{
    /** @use HasFactory<\Database\Factories\PagoCuotaFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'pago_cuotas';

    protected $fillable = [
        'cronograma_id',
        'fecha_pago',
        'monto_pagado',
        'medio_pago',
        'banco',
        'codigo_operacion',
        'observacion',
        'usuario_id'
    ];

    public function cuota()
    {
        return $this->belongsTo(CronogramaPago::class, 'cronograma_id');
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
