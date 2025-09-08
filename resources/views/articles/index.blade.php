@extends('layouts.app')

@section('content')
    <h1 class="mb-3">Daftar Artikel</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-success mb-3">Tambah Artikel</a>

    <ul class="list-group">
        @forelse($articles as $article)
            <li class="list-group-item">
                <h5>{{ $article->title }}</h5>
                <p>{{ Str::limit($article->content, 100) }}</p>
            </li>
        @empty
            <li class="list-group-item">Belum ada artikel.</li>
        @endforelse
    </ul>
@endsection
