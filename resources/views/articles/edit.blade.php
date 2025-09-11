@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h3 class="text-xl font-bold text-gray-800 mb-6">Edit Artikel</h3>

    <form action="{{ route('articles.update', $article->slug) }}" method="POST" enctype="multipart/form-data"
          class="bg-white p-6 rounded-lg shadow">
        @csrf
        @method('PUT')

        @include('articles.partials.form', ['submit' => 'Update Artikel'])

        <div class="mt-4">
            <a href="{{ route('articles.index') }}" 
               class="px-4 py-2 bg-gray-500 text-white rounded-lg shadow hover:bg-gray-600">
                Kembali
            </a>
        </div>
    </form>
</div>
@endsection
