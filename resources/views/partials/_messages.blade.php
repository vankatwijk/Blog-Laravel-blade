@if (Session::has('Success'))

  <div class="alert alert-success" role="alert">
    <strong>Success </strong>{{ Session::get('Success') }}
  </div>

@endif
