@extends('layouts.app')

@section('content')
<div class="container py-5 text-center">
    <h1 class="mb-4">Selamat Datang di Famchips</h1>
    <p class="lead mb-5">
        Ini adalah halaman landing utama. 
        User biasa hanya bisa melihat informasi di sini, 
        sedangkan Admin dapat login untuk mengelola produk dan artikel.
    </p>

    @guest
        <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login Admin</a>
    @else
        @if(auth()->user()->role === 'admin')
            <a href="{{ route('dashboard') }}" class="btn btn-success btn-lg">Go to Dashboard</a>
        @else
            <span class="badge bg-info">Halo, {{ auth()->user()->name }} 👋</span>
        @endif

        <form method="POST" action="{{ route('logout') }}" class="d-inline">
            @csrf
            <button type="submit" class="btn btn-outline-danger ms-3">Logout</button>
        </form>
    @endguest
</div>
@endsection
