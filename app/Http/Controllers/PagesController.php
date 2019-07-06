<?php
namespace App\Http\Controllers;
use App\Post;

Class PagesController extends Controller{

  public function getIndex(){

    //display the 4 most recent post on the homepage
    $post = POST::orderBy('created_at','desc')->limit(2)->get();
    $hiddenPost = POST::orderBy('created_at','desc')->skip(2)->take(2)->get();

    return view('pages.welcome')->withPosts($post)->withHiddenPosts($hiddenPost);
  }

  public function getAbout(){
    $first = 'hendrikus';
    $last = 'van kaywijk';
    $full = $first.' '.$last;
    return view('pages.about')->with('fullname',$full);

  }

  public function getContact(){
    return view('pages.contact');

  }

  public function getBlog(){
    return view('pages.blog');

  }

}

?>
