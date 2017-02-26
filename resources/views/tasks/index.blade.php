@extends("layout.master")


@section("content")

@include("layout.nav")

  @include("tasks.blog-header")

  <div class="container">

    <div class="row">

    @include("tasks.main")

    @include("tasks.sidebar")
    </div><!-- /.row -->

  </div><!-- /.container -->

  @include("tasks.blog-footer")


@stop
@section("scripts.footer")
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

@stop
