<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Movies</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <!-- Navigazione qui -->
        </nav>
    </header>

    <main>
        @yield('content')  <!-- Contenuto specifico della pagina verrà iniettato qui -->
    </main>

    <footer>
        <p>&copy; 2024 Movies</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
