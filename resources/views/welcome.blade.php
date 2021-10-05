<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    </head>
    <body class="antialiased">
        <div id="app">
            <basic-navbar></basic-navbar>

            <main class="container mt-4">
                <div class="bg-light p-5 rounded">
                    <h1>Navbar example</h1>
                    <p class="lead">This example is a quick exercise to illustrate how fixed to top navbar works. As you scroll, it will remain fixed to the top of your browser’s viewport.</p>
                    <a class="btn btn-lg btn-primary" href="/docs/5.0/components/navbar/" role="button">View navbar docs &raquo;</a>
                </div>
            </main>
        </div>
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
