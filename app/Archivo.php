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
        'id_origen',
        'id_user',
        'origen_tipo',
    ];

    public $timestamps = false;


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function origen()
    {
        return $this->morphTo();
    }
}
