<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

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

            * {
                box-sizing: border-box;
                margin: 0;
                padding:0;
            }

            .wrapper {
                width: 80%;
                margin: 0 auto;
            }

            .container {
                display: flex;
                flex-direction: column;
                align-items: flex-end;
            }
            .container * {
                margin-bottom: 10px;
            }

            .container p {
                text-align: center;
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

        {{-- header --}}
        <header>

        </header>
        {{-- /header --}}

        {{-- main --}}
        <main>
            @foreach ($travels as $travel)
                <section class="wrapper">
                    <article>
                        <div class="container">
                            <h2>{{ $travel->travel_event }}</h2>
                            <h4>Numero Opstiti {{ $travel->number_of_visitors }}</h4>
                            <h4>Località disponibile {{ $travel->available_locations }}</h4>
                            <h3>Prezzo {{ $travel->price }} &euro;</h3>
                            <p>{{ $travel->description }}</p>
                        </div>
                    </article>
                </section>
            @endforeach
        </main>
        {{-- /main --}}

        {{-- footer --}}
        <footer>

        </footer>
        {{-- /footer --}}
    </body>
</html>
