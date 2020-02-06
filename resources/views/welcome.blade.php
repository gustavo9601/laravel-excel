<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Excel</title>

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



            <div class="content">
                <div class="title m-b-md">
                    Laravel Excel
                </div>
                <p><a href="https://packagist.org/packages/maatwebsite/excel">composer require maatwebsite/excel</a></p>
                <p><a href="#">php artisan make:export UsersExport --model=User</a></p>

                <div class="links">
                    <a href="{{ route('users.excel')  }}">Exportar a excel</a>
                    <a href="{{ route('users.excel.csv')  }}">Exportar a CSV</a>
                </div>

                <hr>
                <form action="{{ route('users.import.excel') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <!-- Validamos si se envia un mensaje flash -->
                    @if(Session::has('message'))
                        <p>{{Session::get('message')}}</p>
                     @endif

                    <input type="file" name="file" id="">

                    <button type="submit">Subir / Procesar</button>

                </form>
            </div>
        </div>
    </body>
</html>
