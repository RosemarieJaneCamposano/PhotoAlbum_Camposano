<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photo Album</title>


    {{-- Link your external CSS --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Valeria&display=swap" rel="stylesheet">

</head>

<body>
    <header>
        <a href="{{ route('home') }}" class="home-button">
        <h2 class="logo">Soul of the South</h2>
        </a>
    </header>

    <main>
        @yield('content')

    </main>
    <footer>
        <p>&copy; 2025 Soul of the South. All rights reserved.</p>
    </footer>
    <script src="{{ asset('js/JSCode.js') }}"></script>
        @yield('scripts')
</body>
</html>
