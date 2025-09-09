@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Tambah Artikel</h3>
    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @include('articles.partials.form', ['submit' => 'Tambah'])
    </form>
</div>
@endsection
