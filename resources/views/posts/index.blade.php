@extends('main')

@section('title','Post all post')
@section('postCreateSelect','fh5co-active')

@section('content')

<div class="container">

		<div class="row">


				<a href="posts/create" class="btn btn-primary fh5co-btn-icon" style="float:right;" ><i class="ti-pencil"></i> Create new post</a>


		</div>

</div>

<div class="fh5co-spacer fh5co-spacer-xs"></div>
<div class="fh5co-spacer fh5co-spacer-xs"></div>

<div id="fh5co-work">

				<div class="container">
					<div class="row">

      @foreach($posts as $post)
						<div class="col-md-6 col-sm-6 col-xs-6 fh5co-work-wrap">
							<a href="{{$post->id}}" class="fh5co-work-item js-fh5co-work-item">
								<img src="/images/work_1.jpg" alt="Image" class="img-responsive">
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
