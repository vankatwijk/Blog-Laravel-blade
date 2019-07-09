<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //display categories and create form
        $categories = Category::all();

        return view('categories.index')->withCategories($categories);
    }

    public function store(Request $request)
    {
      //validate the data
      $this->validate($request, array(
        'name' => 'required|max:255|unique:categories,name'
      ));

      //store the information
      $category = new Category;
      $category->name = $request->name;

      $category->save();

      Session::flash('Success','The category was saved successfully !');
      //Session::put()

      //redirect to the post
      return  redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
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

      $category = Category::find($id);
      $categories = Category::all();

      return view('categories.index')->withCategories($categories)->withCategory($category);
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
      $category = Category::find($id);
      $category->name = $request->name;

      $category->save();

      return  redirect()->route('categories.index');
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
      $category = Category::find($id);

      $category->delete();

      return  redirect()->route('categories.index');
    }
}
