@extends('main')

@section('title','Post show')
@section('postCreateSelect','fh5co-active')

@section('content')

<div class="container">
  <div id="fh5co-intro">
				<div class="container">
					<h1>{{ $post->title }}</h1>
						<div class="row">
							<div class="col-md-6 col-md-push-6 fh5co-intro-sub">
								<p></p>
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
</div>

<!-- Form -->

@stop
