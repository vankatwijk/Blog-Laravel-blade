<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Session;

class tagController extends Controller
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
        //
        $tags = Tag::all();

        return view('tags.index')->withTags($tags);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
      //validate the data
      $this->validate($request, array(
        'name' => 'required|max:255'
      ));

      //store the information
      $tag = new Tag;
      $tag->name = $request->name;

      $tag->save();

      Session::flash('Success','The tag was saved successfully !');
      //Session::put()

      //redirect to the post
      return  redirect()->route('tags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tag = Tag::find($id);
        return view('tags.show')->withTag($tag);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tag = Tag::find($id);
        $tags = Tag::all();

        return view('tags.index')->withtags($tags)->withtag($tag);
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
      $tag = Tag::find($id);

      //validate the data
      $this->validate($request, array(
        'name' => 'required|max:255'
      ));

      $tag->name = $request->name;

      $tag->save();

      return  redirect()->route('tags.index');
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
      $tag = Tag::find($id);
      $tag->posts()->detach();

      $tag->delete();


      Session::flash('Success','Tag removed successfully !');
      return  redirect()->route('tags.index');
    }
}
