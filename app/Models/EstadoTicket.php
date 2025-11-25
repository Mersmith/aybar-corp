<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class EstadoTicket extends Model
{
    /** @use HasFactory<\Database\Factories\EstadoFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = ['nombre', 'activo'];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}
