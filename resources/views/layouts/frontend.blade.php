

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Famchips') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4 flex justify-between items-center">
            <a href="/" class="text-2xl font-bold text-lime-600">Famchips</a>

            <div class="flex items-center gap-4">
                <a href="/artikel" class="text-gray-700 hover:text-lime-600">Artikel</a>
                <a href="/produk" class="text-gray-700 hover:text-lime-600">Produk</a>
                <a href="/galeri" class="text-gray-700 hover:text-lime-600">Galeri</a>

                @guest
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-lime-600 text-white rounded-lg hover:bg-lime-700">Login</a>
                @else
                    @if(auth()->user()->role === 'admin')
                        <a href="{{ route('dashboard') }}" class="px-4 py-2 bg-lime-600 text-white rounded-lg hover:bg-lime-700">
                            Dashboard
                        </a>
                    @else
                        <span class="text-sm text-gray-600">Halo, {{ auth()->user()->name }} 👋</span>
                    @endif

                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-100 mt-12 py-6">
        <div class="max-w-7xl mx-auto text-center text-sm text-gray-500">
            &copy; {{ date('Y') }} Famchips. All rights reserved.
        </div>
    </footer>
</body>
</html>
