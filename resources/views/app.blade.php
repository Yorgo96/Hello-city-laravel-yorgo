<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        <title>@yield("title","Hello city")</title>

    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main" class="flex flex-col justify items-center">
            @yield("content")

        </main>

        <footer>
            <p class="text-gray-400">
                &copy; copyright {{date("Y")}} &middot;
                @if(!Route::is('apropos'))
                    <a href="{{route('apropos')}}" class="text-indigo-500 hover:text-indigo-600 underline">Apropos-nous</a>
                @endif
            </p>
        </footer>
    </body>
</html>
