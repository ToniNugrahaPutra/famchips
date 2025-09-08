@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Edit Produk</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('products.partials.form', ['submit' => 'Update'])
    </form>
</div>
@endsection
