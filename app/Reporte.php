<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable = [
        'user_id',
        'user_asig_id',
        'area_id',
        'prioridad_id',
        'estatus_id',
        'titulo',
        'descripcion',
        'fecha_inicio',
        'fecha_termino'
    ];


    protected $dates = ['fecha_inicio', 'fecha_termino', 'created_at', 'updated_at'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
