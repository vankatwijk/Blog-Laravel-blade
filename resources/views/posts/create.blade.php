@extends('main')

@section('title','Post Create')
@section('postCreateSelect','fh5co-active')


@section('content')

<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<!-- Form -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="fh5co-uppercase-heading-sm text-center">Create new post</h2>
      <div class="fh5co-spacer fh5co-spacer-xs"></div>
    </div>
    <div class="">
      <form method="POST" action="{{ route('posts.store') }}" enctype="multipart/form-data">

        <div class="col-md-6">
          <div class="form-group">
            <label for="title" class="sr-only">Title</label>
            <input placeholder="Title" name="title" id="Title" type="text" class="form-control input-lg">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="Slug" class="sr-only">Slug</label>
            <input placeholder="Pretty URL, Default is title" name="slug" id="slug" type="text" class="form-control input-lg">
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="featured_image" class="sr-only">Featured image</label>
            <input type="file" name="featured_image" id="featured_image" class="form-control">
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="categories" class="sr-only">Categories</label>
            <select class="form-control" name="category_id">
              @foreach($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
              @endforeach
            </select>
          </div>
        </div>


        <div class="col-md-12">
          <div class="form-group">
            <label for="tags" class="sr-only">Tags</label>
            <select class="js-basic-multiple form-control" name="tags[]" multiple="multiple"  data-placeholder="Select a tag">
              @foreach($tags as $tag)
                <option value="{{$tag->id}}">{{$tag->name}}</option>
              @endforeach
            </select>
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="body" class="sr-only">Body</label>
            <textarea placeholder="Body" name="body" id="Body" class="form-control input-lg" rows="3"></textarea>
          </div>
        </div>
        <div id="editor">

        </div>

        <div class="col-md-6">
          <div class="form-group">
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <input type="submit" class="btn btn-primary btn-md" value="Create">

            <input type="reset" class="btn btn-outline btn-md" value="Reset">
          </div>
        </div>


      </form>
    </div>

  </div>

</div>
<!-- Form -->
<script>
    ClassicEditor
        .create( document.querySelector( '#Body' ) )
        .catch( error => {
            console.error( error );
        } );

        $('.js-basic-multiple').select2();

</script>
@stop
