<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nge Eat</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">

    <!-- Link CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <!-- Vite JS -->
    @vite('resources/js/app.js')

    <!-- Tambahan CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    @stack('styles')
</head>
<body class="font-sans" x-data="{ sidebarOpen: window.innerWidth >= 768 }" x-init="window.addEventListener('resize', () => sidebarOpen = window.innerWidth >= 768)">

    <div class="flex h-screen overflow-hidden">

        {{-- Sidebar --}}
        <template x-if="sidebarOpen">
            <x-sidebar />
        </template>

        {{-- Main Content --}}
        <div class="flex flex-col flex-grow transition-all duration-300 ease-in-out"
            :class="{ 'ml-[250px]': sidebarOpen && window.innerWidth >= 768, 'ml-0': !sidebarOpen || window.innerWidth < 768 }">

            {{-- Topbar --}}
            <x-topbar />

            {{-- Konten Halaman --}}
            <div class="flex-grow p-6 bg-gray-100 overflow-y-auto">
                @yield('content')
            </div>
        </div>

    </div>

    @stack('scripts')
</body>

</html>
