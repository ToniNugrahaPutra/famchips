@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Produk</h3>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @include('products.partials.form', ['submit' => 'Simpan'])
    </form>
</div>
@endsection
