<!DOCTYPE html>
<html>
<head>
    <title>Il tuo titolo</title>
    <!-- Includi i tuoi fogli di stile CSS e i tuoi script JavaScript -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <!-- Intestazione -->
    <header>
        <!-- Inserisci qui il codice per l'intestazione -->
    </header>

    <!-- Navigazione -->
    <nav>
        <!-- Inserisci qui il codice per la navigazione -->
    </nav>

    <!-- Contenuto principale della pagina -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <!-- Inserisci qui il codice per il footer -->
    </footer>

    <!-- Includi i tuoi script JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
