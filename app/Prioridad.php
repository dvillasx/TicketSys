<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prioridad extends Model
{
    protected $table = "prioridades";
    public $timestamps = false;

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}
