<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable = [
        'user_id',
        'user_asig_id',
        'area_id',
        'tipo_id',
        'prioridad_id',
        'titulo',
        'descripcion',
    ];


    protected $dates = ['fecha_inicio', 'fecha_termino', 'created_at', 'updated_at'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function estatus()
    {
        return $this->belongsTo(Estatus::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
}
