<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function post(){

    //this is a one to many relationship from post to categories
    return $this->belongsTo('App\Post');
  }
}
