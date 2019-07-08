@if (Session::has('Success'))

  <div class="alert alert-success" role="alert">
    <div class="container">
      <strong>Success </strong>{{ Session::get('Success') }}
    </div>
  </div>

@endif

@if (count($errors) > 0)

  <div class="alert alert-danger" role="alert">
    <div class="container">
      <strong>Errors: </strong>
        <ul>
        @foreach($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
  </div>

@endif
