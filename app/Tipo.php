<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(Area::class);
    }
}
