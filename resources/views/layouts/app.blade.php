<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ZPAI Projekt</title>
    <link rel="stylesheet" href="/css/app.css">
    <link href="/css/lightbox.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </head>
  <body>
    @include('inc.navbar')
  

<div class="container">
  @if(Request::is('/'))
  @include('inc.showcase')
  @endif
  <!-- <div class="row">
    <div class="col-md-8 col-lg-8"> -->
      @include('inc.messages')
      @yield('content')
    <!-- </div> -->
    <!-- <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
    </div> -->
  </div>
<!-- </div> -->

<footer id="footer" class="text-center">
  <p>Copywright 2018 &copy Artur Maj</p>
</footer>
<script src="/js/lightbox.js"></script>
  </body>
</html>
