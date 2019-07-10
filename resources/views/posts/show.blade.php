@extends('main')

@section('title','Post show')
@section('postCreateSelect','fh5co-active')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-1">
      <a href="{{ route('posts.index') }}" class="btn btn-dark">Go Back</a>
    </div>
    <div class="col-md-8">

    </div>
    <div class="col-md-2">

      <form method="post" action="{{ route('posts.destroy',$post->id) }}">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger" value="Delete">
      </form>
    </div>
    <div class="col-md-1">
        <a href="{{$post->id}}/edit" class="btn btn-info ">Edit</a>
    </div>
  </div>
  <div class="fh5co-spacer fh5co-spacer-xs"></div>
</div>


<!-- Form -->
<div class="container">
  <div id="fh5co-intro">
				<div class="container">
          <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
              <img src="{{isset($post->image)?'/images/posts/'.$post->image:'/images/work_1.jpg'}}" alt="Image" class="img-responsive">
            </div>
            <div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
              <h1>{{ $post->title }}</h1>
              <div class="row">
                <div class="col-md-6 col-md-push-6 fh5co-intro-sub">
                  <p></p>
                </div>
              </div>
            </div>
          </div>

				</div>
			</div>
</div>

<div class="container">
	<div class="col-md-12">
		<h2 class="fh5co-uppercase-heading-sm text-center">Published on : {{ date_format($post->created_at, 'g:ia \o\n l jS F Y') }}</h2>
		<div class="fh5co-spacer fh5co-spacer-xs"></div>

		<p>{!! $post->body !!}</p>
	</div>
  <div class="col-md-12">
    <div class="fh5co-spacer fh5co-spacer-xs"></div>
    <p>Writen by : {!! $post->user->name !!}</p>
    <p>Category : {{(isset($post->category->name)?$post->category->name:'Unknown')}}</p>
    <p>
      @foreach($post->tags as $tag)
        <span class="badge badge-secondary">{{$tag->name.' '}}</span>
      @endforeach
    </p>
  </div>
</div>

<!-- Form -->

@stop
