<div class="col-sm-8 blog-main">

  <h1>
    <a href="/posts/{{$post->id}}">
      {{$post->title}}
    </a>
  </h1>
  <h5>Created by: <strong>{{$post->user->name}}</strong></h5>
  <h5>{{$post->created_at->diffForHumans()}}</h5>
  <hr>
  <h2>{{$post->body}}</h2>
</div><!-- /.blog-main -->
