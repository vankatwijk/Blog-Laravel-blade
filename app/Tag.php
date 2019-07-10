<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts(){
      //return $this->belongsToMany('App\Post','name of table','id of tags', 'id of posts');
      return $this->belongsToMany('App\Post');
    }
}
