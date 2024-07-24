<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title', 'Título da Página')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <ul style="margin: 0 auto;">
            @auth
            <li><a style="font-size: 20px;" href="{{ route('faccionados.index') }}">Lista de Faccionados</a></li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Logout</button>
            </form>
            </li>
            @endauth
            @guest
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Registrar</a></li>
            @endguest
        </ul>
    </nav>

    <main>
        @yield('content')
    </main>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>