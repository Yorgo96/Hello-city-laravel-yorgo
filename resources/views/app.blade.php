<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <title>@yield("title","Hello city")</title>

    </head>
    <body>
        @yield("content")



        <footer>
            <p>
                &copy; copyright {{date("Y")}} &middot;
                @if(!Route::is('apropos'))
                    <a href="{{route('apropos')}}">Apropos-nous</a>
                @endif
            </p>
        </footer>
    </body>
</html>
