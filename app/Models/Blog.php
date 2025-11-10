<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'titulo',
        'slug',
        'contenido',
        'imagen',
        'publicado_en',
        'estado',
        'meta_title',
        'meta_description',
        'meta_image',
        'views'
    ];
}
