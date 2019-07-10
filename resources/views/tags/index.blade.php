@extends('main')

@section('title','tags')
@section('postCreateSelect','fh5co-active')

@section('content')
<div class="container">

		<div class="row">
      @if (isset($tag))
      <form method="POST" action="{{ route('tags.update',$tag->id) }}" enctype="multipart/form-data">

        <div class="col-md-6">
          <div class="form-group">
            <label for="name" class="sr-only">Name</label>
            <input placeholder="Name" name="name" id="name" type="text" value="{{$tag->name}}" class="form-control input-lg">
          </div>
        </div>


        <div class="col-md-6">
          <div class="form-group">

            {{ method_field('PATCH') }}
            <input type="hidden" name="_token" value="{{ Session::token() }}">
            <input type="submit" class="btn btn-primary btn-md" value="Update Category">
          </div>
        </div>

      </form>
      @else
        <form method="POST" action="{{ route('tags.store') }}" enctype="multipart/form-data">

          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="sr-only">Name</label>
              <input placeholder="Name" name="name" id="name" type="text" class="form-control input-lg">
            </div>
          </div>


          <div class="col-md-6">
            <div class="form-group">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <input type="submit" class="btn btn-primary btn-md" value="Create new tag">
            </div>
          </div>

        </form>
      @endif

		</div>

</div>

<div class="fh5co-spacer fh5co-spacer-xs"></div>
<div class="fh5co-spacer fh5co-spacer-xs"></div>

<div id="fh5co-work">

				<div class="container">

          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Options</th>
              </tr>
            </thead>
            <tbody>
              @foreach($tags as $tag)
              <tr>
                <th scope="row">{{$tag->id}}</th>
                <td>{{$tag->name}}</td>
                <td>
                  <form method="post" action="{{ route('tags.destroy',$tag->id) }}" style="display: inline;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                  <a href="/tags/{{$tag->id}}/edit" class="btn btn-info ">Edit</a>
                  <a href="{{ route('tags.show',$tag->id) }}" class="btn btn-info ">View all post</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>




				</div>
			</div>

@stop
