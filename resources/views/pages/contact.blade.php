@extends('main')

@section('title','Contact')
@section('contactSelect','fh5co-active')

@section('content')

<!-- Form -->
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <h2 class="fh5co-uppercase-heading-sm text-center">Form</h2>
      <div class="fh5co-spacer fh5co-spacer-xs"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <form action="#" method="post">
        <div class="col-md-6">
          <div class="form-group">
            <label for="name" class="sr-only">Email</label>
            <input placeholder="Name" id="name" type="text" class="form-control input-lg">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="email" class="sr-only">Email</label>
            <input placeholder="Email" id="email" type="text" class="form-control input-lg">
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="gender" class="sr-only">Gender</label>
            <select class="form-control input-lg" id="gender">
              <option>--Gender--</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group">
            <label for="message" class="sr-only">Message</label>
            <textarea placeholder="Message" id="message" class="form-control input-lg" rows="3"></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <input type="submit" class="btn btn-primary btn-md" value="Send">

            <input type="reset" class="btn btn-outline btn-md" value="Reset">
          </div>
        </div>


      </form>
    </div>

  </div>

</div>
<!-- Form -->

@stop
