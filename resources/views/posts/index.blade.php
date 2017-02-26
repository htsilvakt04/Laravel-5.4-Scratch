@extends("layout.master")


@section("content")

@include("layout.nav")

  @include("posts.partial.blog-header")

  <div class="container">

    <div class="row">

    @foreach ($posts as $post)
      @include("posts.partial.main")
    @endforeach

    @include("posts.partial.sidebar")
    </div><!-- /.row -->

  </div><!-- /.container -->

@stop
@section("scripts.footer")
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

@stop
