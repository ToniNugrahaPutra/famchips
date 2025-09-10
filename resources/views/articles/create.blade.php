@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
    <h3 class="text-xl font-bold text-gray-800 mb-6">Tambah Artikel</h3>

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data"
          class="bg-white p-6 rounded-lg shadow">
        @include('articles.partials.form', ['submit' => 'Tambah'])
    </form>
</div>
@endsection
