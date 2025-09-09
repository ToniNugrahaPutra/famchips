@extends('layouts.app')

@section('content')
<div class="container py-4">

    {{-- Section Welcome --}}
    <div class="card border-0 shadow-sm mb-4" style="background-color: #e9f6d5;">
        <div class="card-body d-flex align-items-center justify-content-between">
            <div>
                <h2 class="fw-bold mb-1">Hi, {{ auth()->user()->name }}</h2>
                <p class="mb-0 text-muted">Welcome to the Famchips Admin Dashboard</p>
            </div>
            <div>
                <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" 
                     alt="Dashboard Illustration" 
                     style="max-height: 100px;">
            </div>
        </div>
    </div>

    {{-- Informasi Statistik --}}
    <h5 class="mb-3">Informasi Statistik</h5>
    <div class="row g-4">

        {{-- Card Produk --}}
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1">Total Produk</h6>
                        <h2 class="fw-bold mb-0">{{ $totalProducts }}</h2>
                    </div>
                    <i class="fas fa-cube fa-2x text-warning"></i>
                </div>
            </div>
        </div>

        {{-- Card Artikel --}}
        <div class="col-md-3">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="text-muted mb-1">Total Artikel</h6>
                        <h2 class="fw-bold mb-0">{{ $totalArticles }}</h2>
                    </div>
                    <i class="fas fa-newspaper fa-2x text-success"></i>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
