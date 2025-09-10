@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-xl shadow p-6">
    <h3 class="text-xl font-semibold text-gray-800 mb-6">Tambah Produk</h3>

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @include('products.partials.form', ['submit' => 'Tambah'])
    </form>
</div>
@endsection
