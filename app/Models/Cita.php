<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cita extends Model
{
    /** @use HasFactory<\Database\Factories\CitaFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'usuario_solicita_id',
        'usuario_recibe_id',
        'sede_id',
        'motivo_cita_id',
        'fecha',
        'hora_inicio',
        'hora_fin',
        'estado',
    ];

    protected $casts = [
        'fecha' => 'date',
        'hora_inicio' => 'datetime:H:i',
        'hora_fin' => 'datetime:H:i',
    ];

    /** RELACIONES */

    public function solicitante()
    {
        return $this->belongsTo(User::class, 'usuario_solicita_id');
    }

    public function receptor()
    {
        return $this->belongsTo(User::class, 'usuario_recibe_id');
    }

    public function sede()
    {
        return $this->belongsTo(Sede::class);
    }

    public function motivo()
    {
        return $this->belongsTo(MotivoCita::class, 'motivo_cita_id');
    }
}
