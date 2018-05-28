<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function team()
    {
      return $this->hasMany(Team::class);
    }

    public function prediction()
    {
      return $this->belongsTo(Prediction::class);
    }

    protected $fillable = ['team1_id', 'team2_id', 'date', 'start_time', 'end_time', 'team1_score', 'team2_score', 'team_win'];
}
