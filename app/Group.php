<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    public function leages()
    {
      return $this->belongsTo(Leagues::class);
    }

    public function team()
    {
      return $this->hasMany(Team::class);
    }

    protected $fillable = ['name', 'team_id', 'number_of_team'];
}
