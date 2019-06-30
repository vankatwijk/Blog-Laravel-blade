@extends('main')

@section('title','Post Create')
@section('postCreateSelect','fh5co-active')

@section('content')

<!-- Form -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="fh5co-uppercase-heading-sm text-center">Create new post</h2>
      <div class="fh5co-spacer fh5co-spacer-xs"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form method="POST" action="{{ route('posts.store') }}">

        <div class="col-md-6">
          <div class="form-group">
            <label for="title" class="sr-only">Title</label>
            <input placeholder="Title" name="title" id="Title" type="text" class="form-control input-lg">
          </div>
        </div>

        <div class="col-md-12">
          <div class="form-group">
            <label for="body" class="sr-only">Body</label>
            <textarea placeholder="Body" name="body" id="Body" class="form-control input-lg" rows="3"></textarea>
          </div>
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

@stop
