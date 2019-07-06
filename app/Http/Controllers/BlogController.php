<?php

namespace App\Http\Controllers;
use App\Post;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function getPosts(){
      //get all post
      //$posts = Post::all();
      $posts = Post::orderBy('id','desc')->paginate(5);

      return view('pages.blogs')->withPosts($posts);
    }
    public function getSingle($slug){
        $post= post::where('slug', $slug)->firstOrFail();

        return view('pages.blog')->withPost($post);
    }
}
