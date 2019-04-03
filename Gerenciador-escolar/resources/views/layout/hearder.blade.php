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

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    
        <nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #778899;">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-md-center" id="menu">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><h1 class="display-4">{{ $title }} </h1><span class="sr-only">(atual)</span></a><br/>
                       
                    </li>
                    
                </ul>
            </div>
        </nav>
    

    <main class="py-4">
        <div class="jumbotron jumbotron-fluid">
            @yield('content')
        </div>
    </main>
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="#">Desenvolvido por: Natanael</a>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        
      </div>
    </nav>
</body>
</html>
