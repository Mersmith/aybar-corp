<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SeparacionLote extends Model
{
    /** @use HasFactory<\Database\Factories\SeparacionLoteFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cliente_id',
        'lote_id',
        'monto',
        'fecha_separacion',
        'estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function lote()
    {
        return $this->belongsTo(Lote::class);
    }
}
