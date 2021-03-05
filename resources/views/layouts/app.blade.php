<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>EACE - Teste Vocacional</title>

   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
   
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js" type="text/javascript"></script>
   

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm img-teste">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('img/eace.svg') }}" class="ml-lg-1 mr-lg-5"></img>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                            <li class="mr-lg-5 ml-lg-5">
                                <a class="menuzin ml-lg-5" href="{{ url('/inicio') }}">Início</a>
                            </li>
                            <li class="mr-lg-5 ml-lg-5 ">
                                <a class="menuzin ml-lg-5" href="{{ url('/amostra') }}">Amostra de cursos <br> CEFET-MG CAMPUS VARGINHA</a>
                            </li>
                            <li class="mr-lg-5 ml-lg-5">
                                <a class="menuzin ml-lg-5" href="{{ url('/sobrenos') }}">Sobre nós</a>
                            </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
          @hasSection('content')
            @yield('content')
          @endif
        </main>
        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
        <script src="https://code.highcharts.com/highcharts.js"></script>
        @hasSection ('javascript')
            @yield('javascript')
        @endif
        <footer>
            <p class="pe">Por Maria Vitória | Júlia Abreu  2018-2020</p>
        </footer>
    </div>
</body>
</html>
