<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>JR</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poiret+One&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/weeding.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    </head>
    <body id="wedding-background">
        
    <div class="box">
        <div class="text-center">
            <img class="img-animation" src="{{asset('img/jr-weeding-white.png')}}" alt="">
            <ul class="lead m-3 mt-0" id="custom">
                <li>
                    <a class="text-light" href="">
                        {{-- <i class="fas fa-angle-right"></i> --}}
                        Nossa História
                    </a>
                </li>
                <li>
                    <a class="text-light" href="#">
                        {{-- <i class="fas fa-angle-right"></i> --}}
                        O Evento
                    </a>
                </li>
                <li>
                    <a class="text-light" href="#">
                        {{-- <i class="fas fa-angle-right"></i> --}}
                        Nossos Convidados
                    </a>
                </li>
                <li>
                    <a class="text-light" href="{{asset('/jr/wishlist')}}">
                        {{-- <i class="fas fa-angle-right"></i> --}}
                        Lista de Presentes
                    </a>
                </li>
            </ul>
            <a href="{{asset('login')}}" class="btn wed-button bg-wedding mt-3 p-3 w-50">ACESSAR MEU PERFIL</a>
            
            {{-- <div class="mt-4">
                <h3 class="text-light" style="position:relative; left: -50px">
                    FALTAM <b>{{ $day }} DIAS</b>
                </h3>
            </div> --}}
        </div>
    </div>

    </body>
</html>
