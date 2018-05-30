<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    public function leages()
    {
      return $this->belongsTo(Leagues::class);
    }

    public function team()
    {
      return $this->hasMany(Team::class);
    }

    protected $table = 'groups';
    protected $fillable = ['name', 'team_id', 'number_of_team'];
}
