<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'MedicalSoft') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #55a6cc;
                background-image: url('img/background.jpg');
                
                color: #e5ebee;
                font-family: 'Varela Round', sans-serif;
                font-weight: 300;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }
            .link-back-down{
                padding-top:10px !important;
                padding-bottom:10px !important;
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(64, 85, 144, 0.383), rgba(0, 0, 0, 0));
            }
            .link-back-down:hover{
                background-image: linear-gradient(rgba(255, 255, 255, 0), rgba(65, 79, 114, 0.596), rgba(0, 0, 0, 0));
            }


            .link-back{
                padding-top:10px !important;
                padding-bottom:10px !important;
                background-color: rgba(42, 55, 61, 0.719);
            }
            .link-back:hover{
                background-color: rgba(55, 92, 151, 0.719);
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a class="link-back" href="{{ url('/home') }}">Inicio</a>
                    @else
                        <a class="link-back" href="{{ route('login') }}">Ingresar</a>

                        <!-- @if (Route::has('register'))
                            <a class="link-back" href="{{ route('register') }}">Registrarme</a>
                        @endif -->
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title ">
                    {{ config('app.name', 'MedicalSoft') }}
                </div>

                <div class="links">
                    <a class="link-back-down" href="#">Acerca de Nosotros</a>
                    <a class="link-back-down" href="#">Contáctanos</a>
                </div>
            </div>
        </div>

        
    </body>
</html>
