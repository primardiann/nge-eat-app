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

    <!-- Tambahan CDN (jaga-jaga kalau style Tailwind dari Vite belum cukup) -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #FAFAFA;
            margin: 0;
            font-family: 'Arial', sans-serif;
        }

        /* Tambahan biar logo tetap rapi di tengah */
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
        }

        .login-card {
            width: 100%;
            max-width: 450px;
            background-color: #FFF7F0;
            border: 1px solid #F58220;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            border-radius: 12px;
        }

        .login-logo {
            width: 96px;
            height: 96px;
            object-fit: contain;
            margin-bottom: 20px;
        }
    </style>

    @stack('styles')
</head>
<body>

    <div class="login-wrapper">
        <div class="login-card text-center">
            <img src="{{ asset('images/logo.png') }}" alt="Logo NgeEat" class="login-logo mx-auto">
            {{ $slot }}
        </div>
    </div>

    @stack('scripts')
</body>
</html>
