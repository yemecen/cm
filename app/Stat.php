<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    public function cms()

    {

        return $this->hasMany(Cm::class,'StatID');

    }
}
