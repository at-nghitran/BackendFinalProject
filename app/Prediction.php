<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prediction extends Model
{
    public function match()
    {
      return $this->belongsTo(Match::class);
    }

    protected $table = 'prediction';
    protected $fillable = ['id','match_id', 'pre_team1', 'pre_team2', 'user_name', 'user_id', 'user_email', 'user_phone'];
}
