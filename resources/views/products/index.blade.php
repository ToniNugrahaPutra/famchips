
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
                <div class="card shadow-sm d-flex flex-column">
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
                    <div class="card-body flex-grow-1">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <div class="card-text small product-description">{!! $product->description ?? '-' !!}</div>
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

<style>
.card .card-body .product-description {
    overflow: hidden; 
    text-overflow: ellipsis;
    max-height: 200px; 
}


.card .card-body .product-description img {
    max-width: 100%;
    height: auto;
    border-radius: 6px;
    margin: 8px 0;
    display: block; 
    object-fit: contain; 
}

.card .card-body .product-description iframe {
    max-width: 100%;
    border-radius: 6px;
}

.card .card-body .product-description table {
    width: 100%;
    border-collapse: collapse;
}

.card .card-body .product-description pre,
.card .card-body .product-description code {
    white-space: pre-wrap;
    word-wrap: break-word;
    max-width: 100%;
    display: block;
}

.card-footer {
    background: #fff;
    border-top: 1px solid #eee;
}

.card-footer .btn {
    min-width: 70px;  
    text-align: center;
}
</style>

