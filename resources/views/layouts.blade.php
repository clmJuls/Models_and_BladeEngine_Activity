<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book App</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <header class="bg-gray-800 text-white py-4">
        <div class="container mx-auto">
            <h1 class="text-2xl font-bold">Book App</h1>
        </div>
    </header>

    @yield('content')

    <footer class="bg-gray-800 text-white py-4 mt-8">
        <div class="container mx-auto">
            <p class="text-center">© 2024 Book App. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>