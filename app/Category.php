<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class Category extends Model
{
    //when you don't follow the naming convention
    //this line will force the laravel to connect to the correct table
    protected $table = 'categories';

    //one to many relationship
    //it will automatically look for Category_id in the post mysql_list_tables
    //
    public function posts(){
      return $this->hasMany('App\Post');
    }
}
