@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 py-6">

    {{-- Section Welcome --}}
    <div class="flex items-center justify-between bg-lime-100 rounded-xl shadow p-6 mb-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Hi, {{ auth()->user()->name }}</h2>
            <p class="text-gray-600">Welcome to the Famchips Admin Dashboard</p>
        </div>
        <div>
            <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" 
                 alt="Dashboard Illustration" 
                 class="max-h-24">
        </div>
    </div>

    {{-- Informasi Statistik --}}
    <h5 class="text-lg font-semibold text-gray-700 mb-4">Informasi Statistik</h5>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        
        {{-- Card Produk --}}
        <div class="bg-white rounded-xl shadow p-6 flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Produk</p>
                <h2 class="text-2xl font-bold text-gray-800">{{ $totalProducts }}</h2>
            </div>
            <i class="fas fa-cube text-3xl text-yellow-500"></i>
        </div>

        {{-- Card Artikel --}}
        <div class="bg-white rounded-xl shadow p-6 flex items-center justify-between">
            <div>
                <p class="text-gray-500 text-sm">Total Artikel</p>
                <h2 class="text-2xl font-bold text-gray-800">{{ $totalArticles }}</h2>
            </div>
            <i class="fas fa-newspaper text-3xl text-green-600"></i>
        </div>

    </div>
</div>
@endsection
