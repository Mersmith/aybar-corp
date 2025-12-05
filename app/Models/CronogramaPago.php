<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CronogramaPago extends Model
{
    /** @use HasFactory<\Database\Factories\CronogramaPagoFactory> */
    use HasFactory, SoftDeletes;

    protected $table = 'cronograma_pagos';

    protected $fillable = [
        'venta_id',
        'numero_cuota',
        'fecha_vencimiento',
        'valor_cuota',
        'monto_cuota_vencida',
        'dias_vencimiento',
        'penalidad',
        'monto_restante',
        'estado',
        'codigo_banco',
        'nombre_banco',
        'medio_pago',
        'monto_pagado_acumulado'
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function pagos()
    {
        return $this->hasMany(PagoCuota::class, 'cronograma_id');
    }

    public function reprogramaciones()
    {
        return $this->hasMany(Reprogramacion::class, 'cronograma_id');
    }

    public function comprobantes()
    {
        return $this->hasMany(ComprobantePago::class, 'cronograma_id');
    }
}
