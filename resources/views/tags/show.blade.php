@extends('main')

@section('title','show tags')
@section('postCreateSelect','fh5co-active')

@section('content')


<div class="container">

		<div class="row">


				<a href="{{route('posts.create')}}" class="btn btn-primary fh5co-btn-icon" style="float:right;" ><i class="ti-pencil"></i> Create new post</a>


		</div>

</div>

<div class="fh5co-spacer fh5co-spacer-xs"></div>
<div class="fh5co-spacer fh5co-spacer-xs"></div>

<div id="fh5co-work">

				<div class="container">
					<div class="row">

      @foreach($tag->posts as $post)
						<div id="postbox" class="col-md-6 col-sm-12 col-xs-12 fh5co-work-wrap">
							<a href="{{route('posts.show',$post->id)}}" class="fh5co-work-item js-fh5co-work-item">
								<img src="{{isset($post->image)?'/images/posts/'.$post->image:'/images/work_1.jpg'}}" style="width:100%" alt="Image" class="img-responsive">
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
      <div>

@stop
