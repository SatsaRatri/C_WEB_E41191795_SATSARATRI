<!DOCTYPE html>
<html lang="{{ str_replace('','', app() -> getLocale()) }}">
 
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-widht, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title> {{ config('app.name') }}</title>
    </head>
    <body>
        <div class="jumbotron jumbroton-fluid">
        <div class="container">
            <h1 class="display-4">HALAMAN HOME</h1>
            <p class="lead">Halaman ini merupakan halaman home.</p>
        </div>
        </div>
    </body>
</html>