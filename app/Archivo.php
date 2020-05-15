<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable = [
        'nombre_original',
        'nombre_hash',
        'mime',
        'tamaño',
        'id_reporte',
    ];

    public $timestamps = false;
}
