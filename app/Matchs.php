<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matchs extends Model
{
    public function team()
    {
      return $this->hasMany(Team::class);
    }

    public function prediction()
    {
      return $this->belongsTo(Prediction::class);
    }

    protected $table = 'matches';
    protected $fillable = ['id','team1_id', 'team2_id', 'date', 'start_time', 'end_time', 'team1_score', 'team2_score', 'team_win'];
}
