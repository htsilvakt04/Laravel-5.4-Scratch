@extends("layout.master")


@section("content")

  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <h1>{{$post->title}}</h1>

        @if (count($post->tags))
          <ul>
            @foreach($post->tags as $tag)
              <li>
                <a href="/posts/tags/{{$tag->name}}">
                  {{$tag->name}}
                </a>
              </li>
            @endforeach
          </ul>
        @endif

        <h3>{{$post->body}}</h3>

        <div class="row">
          <div class="col-md-10">
            <h4>Comment related to this post: </h4>
            <ul>
              @foreach($post->comments as $comment)
                <li><strong>[{{$comment->created_at->diffForHumans()}}]</strong> {{$comment->body}}</li>
              @endforeach
            </ul>
            <hr>
            <hr>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="card-block">
                <form  action="/posts/{{$post->id}}/comments" method="POST">
                  {{csrf_field()}}
                  <div class="form-group">
                    <textarea name="body" placeholder="Leave comment here" class="form-control" required></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" name="" value="Add Comment" class="btn btn-primary">
                  </div>
                </form>
              </div>
            </div>

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
        </div>

      </div>
    </div>
  </div>

@stop
