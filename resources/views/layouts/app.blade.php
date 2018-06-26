<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Hotel Boolpress</title>
    {{-- lo style già presente in public/css --}}
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      {{-- il nome della route in web --}}
      <a class="navbar-brand" href="{{route('homepage')}}">Boolpress</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="{{route('roomsIndex')}}">Stanze</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="main">
        @yield('content')
    </div>

  </body>
</html>
