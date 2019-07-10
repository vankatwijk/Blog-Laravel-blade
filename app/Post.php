<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function category(){

      //this is a one to many relationship from post to categories
      return $this->belongsTo('App\Category');
    }

    //
    public function user(){

      //this is a one to many relationship from post to categories
      return $this->belongsTo('App\User');
    }

    public function tags(){
      return $this->belongsToMany('App\Tag');
    }
}
