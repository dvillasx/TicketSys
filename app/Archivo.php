<?php

namespace App;

use App\Policies\ArchivoPolicy;
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
        'id_user_asig',
    ];

    public $timestamps = false;

    protected $policies = [
        Archivo::class => ArchivoPolicy::class,
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function origen()
    {
        return $this->morphTo();
    }
}
