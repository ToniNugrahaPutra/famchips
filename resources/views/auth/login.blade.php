<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - {{ config('app.name', 'Famchips') }}</title>
    <link rel="icon" href="{{ asset('images/logo2.png') }}" type="image/png" />
    @vite('resources/css/app.css')
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">

    <div class="w-full max-w-5xl bg-white shadow-lg rounded-lg overflow-hidden flex">
        {{-- Left: Form --}}
<div class="w-full md:w-1/2 p-8 flex flex-col items-center justify-center text-center">
    {{-- Logo --}}
    <div class="mb-6 flex flex-col items-center">
        <img src="{{ asset('images/logo.png') }}" alt="Famchips Logo" class="h-16 mb-2">
    </div>

    <h2 class="text-2xl font-bold text-gray-800 mb-2">Welcome Back!</h2>
    <p class="text-gray-500 mb-6">keep up the spirit of living the day!</p>

        {{-- Alert Success --}}
    @if (session('status'))
    <div class="mb-4 p-4 rounded-lg bg-green-100 text-green-700 text-sm text-center">
        {{ session('status') }}
    </div>
@endif


    {{-- Alert Error --}}
    @if (session('error'))
        <div class="mb-4 p-3 rounded-lg bg-red-100 text-red-700 text-sm">
            {{ session('error') }}
        </div>
    @endif

    {{-- Error Validasi --}}
    @if ($errors->any())
        <div class="mb-4 p-3 rounded-lg bg-red-100 text-red-700 text-sm">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    {{-- Form Login --}}
    <form method="POST" action="{{ route('login') }}" class="space-y-4 w-full max-w-sm">
        @csrf

        {{-- Username / Email --}}
        <div class="text-left">
            <label for="email" class="block text-sm font-medium text-gray-700">Username</label>
            <input id="email" type="email" name="email" required autofocus
                   placeholder="Masukkan Username"
                   class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-lime-500 focus:border-lime-500">
        </div>

        {{-- Password --}}
        <div class="text-left">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input id="password" type="password" name="password" required
                   placeholder="Masukkan Password"
                   class="mt-1 w-full px-4 py-2 border rounded-lg focus:ring-lime-500 focus:border-lime-500">
        </div>

        {{-- Tombol --}}
        <div>
            <button type="submit"
                    class="w-full bg-lime-500 text-white py-2 rounded-full hover:bg-lime-600 transition">
                Login
            </button>
        </div>
    </form>
</div>


        {{-- Right: Illustration --}}
        <div class="hidden md:block w-1/2 bg-lime-100 flex items-center justify-center p-8">
            <img src="{{ asset('images/login-illustration.svg') }}" alt="Login Illustration" class="max-w-md">
        </div>
    </div>

</body>
</html>
