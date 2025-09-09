
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Produk</h3>
        <div class="d-flex gap-2">
            <form action="{{ route('products.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari produk..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </form>
            <a href="{{ route('products.create') }}" class="btn btn-primary ms-2">+ Tambah Produk</a>
        </div>
    </div>

    {{-- Grid produk --}}
    <div class="row">
        @forelse($products as $product)
            <div class="col-md-3 mb-4">
                <div class="card h-100 shadow-sm">
                    {{-- Gambar --}}
                    @if($product->image)
                        <img src="{{ asset('storage/'.$product->image) }}" 
                             class="card-img-top" 
                             alt="{{ $product->name }}" 
                             style="height: 200px; object-fit: cover;">
                    @else
                        <div class="d-flex align-items-center justify-content-center bg-light"
                             style="height: 200px;">
                            <span class="text-muted">Tidak ada gambar</span>
                        </div>
                    @endif

                    {{-- Isi card --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text small text-truncate">{{ $product->description ?? '-' }}</p>
                    </div>

                    {{-- Tombol aksi --}}
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('products.edit', $product) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('products.destroy', $product) }}" method="POST"
                              onsubmit="return confirm('Yakin hapus produk ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p class="text-muted">Belum ada produk</p>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $products->links() }}
    </div>
</div>
@endsection