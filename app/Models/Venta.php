<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Venta extends Model
{
    /** @use HasFactory<\Database\Factories\VentaFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cliente_id',
        'lote_id',
        'fecha_venta',
        'precio_total',
        'inicial',
        'saldo_inicial',
        'saldo_pendiente',
        'estado'
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function lote()
    {
        return $this->belongsTo(Lote::class);
    }

    public function cuotas()
    {
        return $this->hasMany(CronogramaPago::class);
    }

    public function reprogramacionesGenerales()
    {
        return $this->hasMany(ReprogramacionGeneral::class);
    }
}
