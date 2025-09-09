@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Produk</h3>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @include('products.partials.form', ['submit' => 'Tambah'])
    </form>
</div>
@endsection