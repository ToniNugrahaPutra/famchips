@extends('layouts.app')

@section('content')
<div class="container">
    <h3 class="mb-4">Tambah Artikel</h3>

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        {{-- Preview Gambar --}}
        <div class="text-center mb-4">
            <label for="image" class="d-block">
                <img id="preview" 
                     src="https://via.placeholder.com/300x200?text=Upload+Image"
                     class="rounded border"
                     style="cursor:pointer; max-height: 250px; object-fit: cover;">
            </label>
            <input type="file" name="image" id="image" class="d-none" accept="image/*"
                   onchange="previewImage(event)">
        </div>

        {{-- Judul & Status --}}
        <div class="row mb-3">
            <div class="col">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" 
                       class="form-control" 
                       value="{{ old('title') }}" required>
            </div>
            <div class="col">
                <label for="status">Status</label>
                <select name="status" id="status" class="form-control" required>
                    <option value="">Pilih Status</option>
                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                </select>
            </div>
        </div>

        {{-- Deskripsi --}}
        <div class="mb-3">
            <label for="description">Deskripsi</label>
            <textarea name="description" id="description" rows="6" 
                      class="form-control" required>{{ old('description') }}</textarea>
        </div>

        <div class="text-end">
            <button type="submit" class="btn btn-success">Simpan</button>
        </div>
    </form>
</div>
@endsection

@push('scripts')
<script>
    function previewImage(event) {
        const input = event.target;
        const reader = new FileReader();

        reader.onload = function(){
            const preview = document.getElementById('preview');
            preview.src = reader.result;
        };

        if(input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
@endpush
