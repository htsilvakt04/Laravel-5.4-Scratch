@extends("layout.master")

@section("content")
@include("layout.nav")
<div class="container">
  <div class="row">
  <div class="col-md-8">
    <h1>Create a Post</h1>
    <hr>
    <form method="POST" action="/posts">
      {{ csrf_field() }}
      <div class="form-group">
        <label for="title">Title:</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>
      <div class="form-group">
        <label for="body">Body:</label>
        <input type="text" class="form-control" id="body" name="body">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @if (count($errors) > 0)
      <hr>
      <div class='alert alert-danger'>
        <ul>
          @foreach ($errors->all()  as $error)
            <li> {{ $error }} </li>
          @endforeach
        </ul>
      </div>
    @endif
  </div>
    @include("posts.partial.sidebar")
  </div>
</div>
@stop
