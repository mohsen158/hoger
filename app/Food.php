<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    //
   public function group()
    {
        return $this->belongsTo('App\Group');
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
