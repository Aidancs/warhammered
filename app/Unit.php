<?php

namespace App;

use Ability;
use Melee;
use Missle;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function isAlive()
    {
        return true;
    }

    public function ability()
    {
        return $this->hasMany('App\Ability');
    }

    public function melee()
    {
        return $this->hasMany('App\Melee');
    }

    public function missle()
    {
        return $this->hasMany('App\Missle');
    }
}
