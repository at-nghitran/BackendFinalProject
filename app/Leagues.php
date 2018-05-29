<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leagues extends Model
{
    public function leagues()
    {
      return $this->hasMany(Group::class);
    }

    protected $table = 'leagues';
    protected $fillable = ['name', 'group_id', 'description', 'banner'];
    // public $timestamp = false;
}
