@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
        <h3 class="text-xl font-semibold text-gray-800">Daftar Produk</h3>

        <div class="flex flex-col sm:flex-row gap-2">
            {{-- Form search --}}
            <form action="{{ route('products.index') }}" method="GET" class="flex">
                <input type="text" name="search" placeholder="Cari produk..."
                       value="{{ request('search') }}"
                       class="rounded-l-lg border-gray-300 focus:border-lime-500 focus:ring focus:ring-lime-200 w-full sm:w-64 text-sm">
                <button type="submit"
                        class="px-4 py-2 bg-gray-200 hover:bg-gray-300 rounded-r-lg text-gray-700 text-sm">
                    Cari
                </button>
            </form>

            <a href="{{ route('products.create') }}"
               class="px-4 py-2 bg-lime-600 hover:bg-lime-700 text-white rounded-lg shadow text-sm text-center">
                + Tambah Produk
            </a>
        </div>
    </div>

    {{-- Grid produk --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse($products as $product)
            <div class="bg-white rounded-xl shadow hover:shadow-md transition flex flex-col">

                {{-- Gambar --}}
                @if($product->image)
                    <img src="{{ asset('storage/'.$product->image) }}"
                         alt="{{ $product->name }}"
                         class="h-48 w-full object-cover rounded-t-xl">
                @else
                    <div class="h-48 flex items-center justify-center bg-gray-100 rounded-t-xl">
                        <span class="text-gray-400 text-sm">Tidak ada gambar</span>
                    </div>
                @endif

                {{-- Isi card --}}
                <div class="p-4 flex-1">
                    <h5 class="text-base font-semibold text-gray-800 mb-2">{{ $product->name }}</h5>
                    <div class="text-sm text-gray-600 product-description">
                        {!! $product->description ?? '-' !!}
                    </div>
                </div>

                {{-- Tombol aksi --}}
                <div class="px-3 py-2 border-t flex justify-between gap-2 bg-gray-50">
                    <a href="{{ route('products.edit', $product) }}"
                       class="flex-1 text-center px-3 py-2 bg-yellow-400 hover:bg-yellow-500 text-white text-sm rounded-lg">
                        Edit
                    </a>
                    <form action="{{ route('products.destroy', $product) }}" method="POST"
                          onsubmit="return confirm('Yakin hapus produk ini?')" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="w-full px-3 py-2 bg-red-500 hover:bg-red-600 text-white text-sm rounded-lg">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-12">
                <p class="text-gray-500">Belum ada produk</p>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $products->links() }}
    </div>
</div>
@endsection

{{-- Styling tambahan untuk konten CKEditor di grid --}}
<style>
.product-description {
    overflow: hidden;
    text-overflow: ellipsis;
    max-height: 150px; /* preview singkat */
}

.product-description img {
    max-width: 100%;
    height: auto;
    border-radius: 6px;
    margin: 8px 0;
    display: block;
    object-fit: contain;
}

.product-description iframe {
    max-width: 100%;
    border-radius: 6px;
}

.product-description table {
    width: 100%;
    border-collapse: collapse;
}

.product-description pre,
.product-description code {
    white-space: pre-wrap;
    word-wrap: break-word;
    max-width: 100%;
    display: block;
}
</style>
