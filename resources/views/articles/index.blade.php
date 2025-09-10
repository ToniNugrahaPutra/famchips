@extends('layouts.app')

@section('content')
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">

    {{-- Header --}}
    <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-6 gap-4">
        <h3 class="text-xl font-bold text-gray-800">Daftar Artikel</h3>
        <div class="flex flex-col md:flex-row gap-3">
            {{-- Form Pencarian --}}
            <form action="{{ route('articles.index') }}" method="GET" class="flex">
                <input type="text" name="search"
                       placeholder="Cari artikel..."
                       value="{{ request('search') }}"
                       class="w-full md:w-64 rounded-l-lg border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 text-sm">
                <button type="submit"
                        class="px-4 py-2 bg-gray-100 border border-l-0 border-gray-300 rounded-r-lg text-sm text-gray-700 hover:bg-gray-200">
                    Cari
                </button>
            </form>

            {{-- Tombol Tambah --}}
            <a href="{{ route('articles.create') }}"
               class="px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-lg shadow hover:bg-indigo-700">
                + Tambah Artikel
            </a>
        </div>
    </div>

    {{-- Grid Artikel --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        @forelse($articles as $article)
            <div class="bg-white rounded-lg shadow hover:shadow-md flex flex-col overflow-hidden">
                
                {{-- Gambar --}}
                @if($article->image)
                    <img src="{{ asset('storage/'.$article->image) }}"
                         alt="{{ $article->title }}"
                         class="h-48 w-full object-cover">
                @else
                    <div class="h-48 flex items-center justify-center bg-gray-100 text-gray-400">
                        Tidak ada gambar
                    </div>
                @endif

                {{-- Isi card --}}
                <div class="p-4 flex-1">
                    <h5 class="font-semibold text-gray-800">{{ $article->title }}</h5>
                    <p class="mt-2">
                        <span class="px-2 py-1 text-xs font-medium rounded-full 
                            {{ $article->status === 'published' ? 'bg-green-100 text-green-700' : 'bg-yellow-100 text-yellow-700' }}">
                            {{ $article->status === 'published' ? 'Diterbitkan' : 'Draft' }}
                        </span>
                    </p>
                </div>

                {{-- Tombol aksi --}}
                <div class="px-4 py-3 bg-gray-50 border-t flex justify-between items-center">
                    <a href="{{ route('articles.edit', $article->id) }}"
                       class="px-3 py-1 text-xs font-medium bg-yellow-500 text-white rounded hover:bg-yellow-600">
                        Edit
                    </a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                          onsubmit="return confirm('Yakin hapus artikel ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                                class="px-3 py-1 text-xs font-medium bg-red-600 text-white rounded hover:bg-red-700">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="col-span-full text-center py-10 text-gray-500">
                Belum ada artikel
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-6">
        {{ $articles->links() }}
    </div>
</div>
@endsection
