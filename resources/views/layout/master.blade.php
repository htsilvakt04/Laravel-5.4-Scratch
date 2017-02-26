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
    @yield("content")
  </body>
  @yield("scripts.footer")
  <script src="/js/app.js" charset="utf-8"></script>
</html>
