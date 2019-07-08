@extends('main')

@section('title','Post Create')
@section('postCreateSelect','fh5co-active')

<script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>


@section('content')

<!-- Form -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="fh5co-uppercase-heading-sm text-center">Update post</h2>
      <div class="fh5co-spacer fh5co-spacer-xs"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form method="post" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">

        <div class="col-md-6">
          <div class="form-group">
            <label for="title" class="sr-only">Title</label>
            <input placeholder="Title" name="title" id="Title" type="text" class="form-control input-lg" value="{{ $post->title }}">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <label for="Slug" class="sr-only">Slug</label>
            <input placeholder="Slug" name="slug" id="slug" type="text" class="form-control input-lg" value="{{ $post->slug }}">
          </div>
        </div>


        <div class="col-md-12">
          <div class="form-group">
            <label for="body" class="sr-only">Body</label>
            <textarea placeholder="Body" name="body" id="Body" class="form-control input-lg" rows="3">{{ $post->body }}</textarea>
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="hidden" name="_method" value="PUT">
            <input type="submit" class="btn btn-primary btn-md" value="Update">

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
</script>

@stop
