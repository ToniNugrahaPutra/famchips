<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Famchips Admin') }}</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    {{-- Navbar --}}
    <nav class="bg-gray-800 text-white shadow">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="{{ route('dashboard') }}" class="text-lg font-bold">Famchips</a>
            
            <div class="flex items-center space-x-4">
                @auth
                    <a href="{{ route('dashboard') }}" class="hover:text-gray-300">Dashboard</a>
                    <a href="{{ route('products.index') }}" class="hover:text-gray-300">Products</a>
                    <a href="{{ route('articles.index') }}" class="hover:text-gray-300">Articles</a>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="hover:text-gray-300">Logout</button>
                    </form>
                @endauth
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main class="container mx-auto px-4 py-6 flex-grow">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        @yield('content')
    </main>

    {{-- CKEditor --}}
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
</body>
</html>
