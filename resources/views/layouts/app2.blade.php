<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/custom.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    



</head>
<body>
    <div id="app">
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">MyAgent</a>
  </div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  <ul class="nav navbar-nav">
    <li><a href="{{ route('eventmanager.home') }}">Events</a><span class="hover"></span></li>
    <li><a href="{{ route('eventmanager.page.availableDj') }}">Dj Roaster</a><span class="hover"></span></li>
    <li><a href="{{ route('eventmanager.events.create') }}">+ Create Event</a><span class="hover"></span></li>
    <li><a href="{{ url('my-profile') }}"class="dropdown-item">
      {{ Auth::user()->name }}
   </a><span class="hover"></span></li>
   <li><a class="dropdown-item" href="{{ route('logout') }}"
      onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
       {{ __('Logout') }}
   </a>

   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
       @csrf
   </form><span class="hover"></span></li>
  </ul>
</div>
</div>
</nav>

@yield('content')
    </div>


</body>
<script>
$( "li" ).hover(
  function() {
      $(this).find("span").stop().animate({
      width:"100%",
      opacity:"1",
    }, 400, function () {
    })
  }, function() {
      $(this).find("span").stop().animate({
      width:"0%",
      opacity:"0",
    }, 400, function () {
    })
  }
);
</script>
</html>
