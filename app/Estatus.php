<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    protected $table = "estatus";
    public $timestamps = false;

    public function reportes()
    {
        return $this->hasMany(Reporte::class);
    }
}
