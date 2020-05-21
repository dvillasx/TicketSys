<?php

namespace App;

use App\Policies\ReportePolicy;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    use SoftDeletes;


    protected $dates = ['fecha_inicio', 'fecha_termino', 'created_at', 'updated_at', 'deleted_at'];

    protected $policies = [
        Reporte::class => ReportePolicy::class,
    ];

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

    public function prioridad()
    {
        return $this->belongsTo(Prioridad::class);
    }

    public function archivos()
    {
        return $this->morphToMany(Archivo::class, 'origen');
    }


    public function setDescripcionAttribute($value)
    {
        $this->attributes['descripcion'] = strtolower($value);
    }
}
