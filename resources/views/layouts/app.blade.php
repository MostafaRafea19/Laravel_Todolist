<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href={{asset('css/app.css')}}>
        <title>Todolist</title>
    </head>

    <body>
        @include('layouts.inc.navbar')
        <div class="container my-3">
            @include('layouts.inc.alert')
            @yield('content')
        </div>

        <script src="{{ asset('js/bootstrap.js') }}"></script>
    </body>

</html>
