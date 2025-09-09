@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Produk</h3>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('products.partials.form', ['submit' => 'Update'])
    </form>
</div>
@endsection
