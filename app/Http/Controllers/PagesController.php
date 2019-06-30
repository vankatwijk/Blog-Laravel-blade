<?php
namespace App\Http\Controllers;

Class PagesController extends Controller{

  public function getIndex(){
    return view('pages.welcome');
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
