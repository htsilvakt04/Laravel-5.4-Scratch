@extends("layout.master")

@section("content")

  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <h1>Register</h1>
        <form action="/register" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required>
          </div>
          <div class="form-group">
            <label for="password_confirmation">Password Confirm:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}" required>
          </div>
          <div class="form-group">
            <input type="submit" value="Create" class="btn btn-danger">
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
