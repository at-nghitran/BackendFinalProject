<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function group()
    {
      return $this->belongsTo(Group::class);
    }

    public function match()
    {
      return $this->hasMany(Match::class);
    }
}
