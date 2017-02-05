<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
  public function foods()
    {
        return $this->hasMany('App\Food');
    }

   public function menu()
    {
        return $this->belongsTo('App\Menu');
    }
}
