<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hello-city</title>

    </head>
    <body>
        <h1>Bonjour dèpuis Conakry</h1>
        <p>Il est actuellement {{date("h : i A")}}.</p>

        <footer>
            <p>
                &copy; copyright {{date("Y")}} &middot;
                <a href="apropos-nous">Apropos-nous</a>
            </p>
        </footer>
    </body>
</html>
