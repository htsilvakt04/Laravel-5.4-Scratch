@extends("layout.master")


@section("content")

<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h1>Login</h1>
      <form class="" action="/login" method="post">
        {{csrf_field()}}
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
        </div>
        <div class="form-group">
          <label for="password">Password:</label>
          <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required>
        </div>
        <div class="form-group">
          <input type="submit" value="Log in" class="btn btn-warning">
        </div>
        <div class="form-group">
          @if (count($errors) > 0)
            <div class='alert alert-danger'>
              <ul>
                @foreach ($errors->all()  as $error)
                  <li> {{ $error }} </li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
      </form>
    </div>
  </div>
</div>

@stop
