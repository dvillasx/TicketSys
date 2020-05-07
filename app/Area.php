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
}
