<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

        <title>{{isset($pageTitle) ? $pageTitle ." | ". config("app.name") : config("app.name")}}</title>
    </head>
    <body class="py-6 flex flex-col justify-between items-center min-h-screen">
        <main role="main" class="flex flex-col justify items-center">
            @yield("content")

        </main>
        @include("Layouts/partials/_footer")
    </body>
</html>
