<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel From Scratch</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
    @yield("scripts.header")

  </head>
  <body>
    @include("layout.nav")
    @if(session()->has("message"))
      <div class="alert alert-success" role="alert">
          {{session("message")}}
      </div>
    @endif
    @yield("content")
  </body>
  @yield("scripts.footer")
  <script src="/js/app.js" charset="utf-8"></script>
</html>
