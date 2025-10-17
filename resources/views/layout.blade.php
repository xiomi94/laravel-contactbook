<html>

<head>
    <title>Agenda de contactos</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <h1>Agenda de contactos</h1>
        <nav>
            <a href="{{ route('contacts.index') }}">
                <button type="submit" class="button btn-primary">Inicio</button>
            </a>
        </nav>
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>
</body>

</html>
