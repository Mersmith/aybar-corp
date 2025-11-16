<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reprogramacion extends Model
{
    /** @use HasFactory<\Database\Factories\ReprogramacionFactory> */
    use HasFactory, SoftDeletes;

    public $timestamps = false;

    protected $fillable = [
        'cronograma_id',
        'numero_cuota',
        'fecha_anterior',
        'fecha_nueva',
        'monto_anterior',
        'monto_nuevo',
        'motivo',
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
