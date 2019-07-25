<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Almacen de Pizzas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .links > a {
                color: #636b6f;
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
                    @else
                        <a href="{{ route('login') }}">Login</a>

                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="font-size:3.2em;">
                    ADP x PEISA
                </div>

                <div class="links">
                    @if (Auth::User() && Auth::User()->role >= 5)
                    <a href="{{route('generate-ticket')}}">Generar Ticket Virtual</a>
                    @endif
                    @if (Auth::User() && Auth::User()->role == 7)
                    <a href="{{route('dashboard-admin')}}">Administrar</a>
                    @endif
                    @if (Auth::User() && Auth::User()->order_id != null)
                    <a href="{{route('peisa')}}">Tu orden ya fue subida!</a>
                    @else
                <a href="{{route('peisa')}}">Hacer una orden</a>
                @endif

                </div>
            </div>
        </div>
    </body>
</html>
a