<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComprobantePago extends Model
{
    /** @use HasFactory<\Database\Factories\ComprobantePagoFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cronograma_id',
        'path',
        'url',
        'extension',
        'numero_operacion',
        'banco',
        'monto',
        'fecha',
        'observacion',
        'estado',
        'cliente_id',
        'usuario_valida_id',
        'fecha_validacion',
        'razon_social',
        'proyecto',
        'manzana',
        'lote',
        'codigo_cuota',
        'numero_cuota',
    ];

    protected $casts = [
        'fecha_validacion' => 'datetime',
        'monto' => 'decimal:2',
    ];

    public function cronograma()
    {
        return $this->belongsTo(CronogramaPago::class, 'cronograma_id');
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id');
    }

    public function usuarioValida()
    {
        return $this->belongsTo(User::class, 'usuario_valida_id');
    }

    public function estado()
    {
        return $this->belongsTo(EstadoComprobantePago::class, 'estado_comprobante_pago_id');
    }
}
