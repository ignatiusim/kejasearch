<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','keja search')}}</title>
        <link ref="stylesheet" type="text/css" herf="css/app.css">


    </head>
    <body>
         @include('inc.nav')
         
         <div class="container">
            @include('inc.messages')
            @yield('content')
         </div>

    </body>
</html>
