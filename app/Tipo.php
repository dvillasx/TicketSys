<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public $timestamps = false;

    public function areas()
    {
        return $this->belongsToMany(Area::class);
    }
}
