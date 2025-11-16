<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ReprogramacionGeneral extends Model
{
    /** @use HasFactory<\Database\Factories\ReprogramacionGeneralFactory> */
    use HasFactory, SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'venta_id',
        'saldo_anterior',
        'nuevo_total',
        'nueva_cantidad_cuotas',
        'tasa_interes',
        'motivo',
        'usuario_id'
    ];

    public function venta()
    {
        return $this->belongsTo(Venta::class);
    }

    public function usuario()
    {
        return $this->belongsTo(User::class);
    }
}
