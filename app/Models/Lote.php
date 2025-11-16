<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lote extends Model
{
    /** @use HasFactory<\Database\Factories\LoteFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = ['proyecto_id', 'numero_lote', 'manzana', 'area', 'estado'];

    public function proyecto()
    {
        return $this->belongsTo(Proyecto::class);
    }

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }
}
