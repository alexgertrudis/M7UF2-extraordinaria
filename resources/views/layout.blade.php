<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Movie and Genre</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <nav class="bg-blue-600 p-4 text-white">
        <div class="container mx-auto">
            <a href="{{ route('movies.index') }}" class="mr-4">Movies</a>
            <a href="{{ route('genres.index') }}" class="mr-4">Genres</a>
        </div>
    </nav>
    <div class="container mx-auto p-4">
        @yield('content')
    </div>
</body>

</html>