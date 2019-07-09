@extends('main')

@section('title','Blog')
@section('blogSelect','fh5co-active')

@section('content')

<style>
	#postbox{
	    height: 200px;
	    overflow: hidden;
	}
</style>

<div id="fh5co-work">

				<div class="container">
					<div class="row">

      @foreach($posts as $post)
						<div id="postbox" class="col-md-6 col-sm-12 col-xs-12 fh5co-work-wrap" >
							<a href="{{route('blog.single',$post->slug)}}" class="fh5co-work-item js-fh5co-work-item">
								<img src="{{isset($post->image)?'images/posts/'.$post->image:'/images/work_1.jpg'}}" style="width:100%" alt="Image" class="img-responsive">
								<div class="fh5co-overlay-bg js-fh5co-overlay-bg" style=""></div>
								<div class="fh5co-overlay-text" style="opacity: 1;">
									<h2>{{$post->title}}</h2>
									<ul class="fh5co-categories">
										<li>Web Design</li>
										<li>Identity</li>
										<li>Packaging</li>
									</ul>
								</div>
							</a>
						</div>
      @endforeach


					</div>



				</div>
			</div>
      <div style="text-align: center;">
        {!! $posts->links(); !!}
      <div>

@stop
