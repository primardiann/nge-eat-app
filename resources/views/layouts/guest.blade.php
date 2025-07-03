<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login - NgeEat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

    <!-- Tailwind & App CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @vite('resources/js/app.js')

    <style>
        body {
            background-color: #FFF7F0;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center">
    {{ $slot }}
</body>
</html>
