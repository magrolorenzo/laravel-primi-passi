<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href={{ asset("css/app.css") }}>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <title>Lorenzo</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <h1>Benvenuto {{ $name }} {{$surname}}
                    </h1>
                </div>
                <div class="links">
                    <a href={{ url("/") }}>Home</a>
                    <a href={{ url("test") }}>Prova</a>
                </div>
            </div>
        </div>
    </body>
</html>
