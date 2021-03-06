<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
    public function tipos()
    {
        return $this->hasMany(Tipo::class);
    }
    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }

    public function scopeInformatica($query)
    {
        return $query->where('nombre_area', '=', 'Informática');
    }
}
