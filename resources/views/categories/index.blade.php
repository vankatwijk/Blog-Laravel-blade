@extends('main')

@section('title','Post all post')
@section('postCreateSelect','fh5co-active')

@section('content')

<div class="container">

		<div class="row">
      @if (isset($category))
      <form method="POST" action="{{ route('categories.update',$category->id) }}" enctype="multipart/form-data">

        <div class="col-md-6">
          <div class="form-group">
            <label for="name" class="sr-only">Name</label>
            <input placeholder="Name" name="name" id="name" type="text" value="{{$category->name}}" class="form-control input-lg">
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
        <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data">

          <div class="col-md-6">
            <div class="form-group">
              <label for="name" class="sr-only">Name</label>
              <input placeholder="Name" name="name" id="name" type="text" class="form-control input-lg">
            </div>
          </div>


          <div class="col-md-6">
            <div class="form-group">
              <input type="hidden" name="_token" value="{{ Session::token() }}">
              <input type="submit" class="btn btn-primary btn-md" value="Create new Category">
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
              @foreach($categories as $category)
              <tr>
                <th scope="row">{{$category->id}}</th>
                <td>{{$category->name}}</td>
                <td>
                  <form method="post" action="{{ route('categories.destroy',$category->id) }}" style="display: inline;">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" class="btn btn-danger" value="Delete">
                  </form>
                  <a href="/categories/{{$category->id}}/edit" class="btn btn-info ">Edit</a>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>




				</div>
			</div>

@stop
