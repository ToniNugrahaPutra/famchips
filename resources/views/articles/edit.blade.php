@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Edit Artikel</h3>
    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @include('articles.partials.form', ['submit' => 'Update'])
    </form>
</div>
@endsection
