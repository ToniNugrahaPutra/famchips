
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h3>Daftar Artikel</h3>
        <div class="d-flex gap-2">
            <form action="{{ route('articles.index') }}" method="GET" class="d-flex">
                <input type="text" name="search" class="form-control me-2" placeholder="Cari artikel..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary" type="submit">Cari</button>
            </form>
            <a href="{{ route('articles.create') }}" class="btn btn-primary ms-2">+ Tambah Artikel</a>
        </div>
    </div>

    {{-- Grid artikel --}}
    <div class="row">
        @forelse($articles as $article)
            <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                {{-- Gambar --}}
                @if($article->image)
                <img src="{{ asset('storage/'.$article->image) }}" 
                     class="card-img-top" 
                     alt="{{ $article->title }}" 
                     style="height: 200px; object-fit: cover;">
                @else
                <div class="d-flex align-items-center justify-content-center bg-light"
                     style="height: 200px;">
                    <span class="text-muted">Tidak ada gambar</span>
                </div>
                @endif

                {{-- Isi card --}}
                <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text"><span class="badge bg-{{ $article->status === 'published' ? 'success' : 'warning' }}">
                    {{ $article->status === 'published' ? 'Diterbitkan' : 'Draft' }}
                </span></p>
                </div>
                
                {{-- Tombol aksi --}}
                <div class="card-footer d-flex justify-content-between">
                    <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                          onsubmit="return confirm('Yakin hapus artikel ini?')">
                        @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
            <p class="text-muted">Belum ada artikel</p>
            </div>
        @endforelse
        </div>

    {{-- Pagination --}}
    <div class="mt-3">
        {{ $articles->links() }}
    </div>
</div>
@endsection