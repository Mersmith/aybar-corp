<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    /** @use HasFactory<\Database\Factories\TicketFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cliente_id',
        'area_id',
        'tipo_solicitud_id',
        'canal_id',
        'estado_ticket_id',
        'usuario_asignado_id',
        'asunto_inicial',
        'descripcion_inicial',
        'lotes',
        'asunto',
        'descripcion',
    ];

    protected $casts = [
        'lotes' => 'array',
    ];

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function tipoSolicitud()
    {
        return $this->belongsTo(TipoSolicitud::class);
    }

    public function canal()
    {
        return $this->belongsTo(Canal::class);
    }

    public function estado()
    {
        return $this->belongsTo(EstadoTicket::class, 'estado_ticket_id');
    }

    public function asignado()
    {
        return $this->belongsTo(User::class, 'usuario_asignado_id');
    }

    public function historial()
    {
        return $this->hasMany(TicketHistorial::class);
    }

    public function derivados()
    {
        return $this->hasMany(TicketDerivado::class);
    }

    public function mensajes()
    {
        return $this->hasMany(TicketMensaje::class);
    }

    public function archivos()
    {
        return $this->morphMany(Archivo::class, 'archivable');
    }
}
