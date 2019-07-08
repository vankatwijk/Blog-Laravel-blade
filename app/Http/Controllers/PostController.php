<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use Session;
use Image;
use Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //get all post
        //$posts = Post::all();
        $posts = Post::orderBy('id','desc')->paginate(5);

        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
          'body' => 'required',
          'featured_image' => 'sometimes|image'
        ));

        //store the information
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->body = $request->body;
        $post->user_id = Auth::id();

        if($request->hasFile('featured_image')){
          $image = $request->file('featured_image');
          $filename = time().'.'.$image->getClientOriginalExtension();// intervention library
          $location = public_path('images/posts/'.$filename);
          Image::make($image)->resize(800, 400)->save($location);
          $post->image = $filename;
        }

        $post->save();

        Session::flash('Success','The post was saved successfully !');
        //Session::put()

        //redirect to the post
        return  redirect()->route('posts.show',$post->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $post = Post::find($id);
      return view('posts.edit')->withPost($post);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $post = Post::find($id);

      //validate the data
      if($request->input('slug') == $post->slug){
        $this->validate($request, array(
          'title' => 'required|max:255',
          'body' => 'required',
          'featured_image' => 'sometimes|image'
        ));

      }else{
        $this->validate($request, array(
          'title' => 'required|max:255',
          'slug' => 'required|alpha_dash|min:5|max:255|unique:posts,slug',
          'body' => 'required',
          'featured_image' => 'sometimes|image'
        ));
      }

      //find the post and update it
      $post->title = $request->title;
      $post->slug = $request->slug;
      $post->body = $request->body;

      if($request->hasFile('featured_image')){
        $image = $request->file('featured_image');
        $filename = time().'.'.$image->getClientOriginalExtension();// intervention library
        $location = public_path('images/posts/'.$filename);
        Image::make($image)->resize(800, 400)->save($location);

        $oldFileName = $post->image;
        $post->image = $filename;

        Storage::delete($oldFileName);
      }

      $post->save();

      Session::flash('Success','The post was updated successfully !');
      //Session::put()

      //redirect to the post
      return  redirect()->route('posts.show',$post->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //find the post and update it
      $post = Post::find($id);

      $oldFileName = $post->image;
      Storage::delete($oldFileName);
      $post->delete();

      return  redirect()->route('posts.index');
    }
}
