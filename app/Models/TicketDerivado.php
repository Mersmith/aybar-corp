<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TicketDerivado extends Model
{
    /** @use HasFactory<\Database\Factories\TicketDerivadoFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'ticket_id',
        'de_area_id',
        'a_area_id',
        'usuario_deriva_id',
        'usuario_recibe_id',
        'motivo',
    ];
}
