@csrf

{{-- Preview Gambar --}}
<div class="text-center mb-4">
    <label for="image" class="d-block">
        <img id="preview" 
             src="{{ isset($article) && $article->image 
                        ? asset('storage/'.$article->image) 
                        : 'https://via.placeholder.com/300x200?text=Upload+Image' }}"
             class="rounded border border-2 mx-auto d-block"
             style="cursor:pointer; max-height: 250px; max-width: 300px; width: 100%; object-fit: cover;">
    </label>
    <input type="file" name="image" id="image" class="d-none" accept="image/*"
           onchange="previewImage(event)">
</div>

<div class="row">
    <div class="col-md-6">
        <div class="mb-3">
            <label for="title" class="form-label">Judul Artikel</label>
            <input type="text" class="form-control" name="title" 
                   value="{{ old('title', $article->title ?? '') }}"
                   placeholder="Masukkan judul artikel" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" class="form-select" required>
                <option value="draft" {{ old('status', $article->status ?? '') === 'draft' ? 'selected' : '' }}>Draft</option>
                <option value="published" {{ old('status', $article->status ?? '') === 'published' ? 'selected' : '' }}>Published</option>
            </select>
        </div>
    </div>
</div>


<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" class="form-control" rows="10" 
              placeholder="Tulis deskripsi..." required>{{ old('description', $article->description ?? '') }}</textarea>
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-success">{{ $submit ?? 'Simpan' }}</button>
</div>

{{-- Preview image script --}}
<script>
function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function(){
        const output = document.getElementById('preview');
        output.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>
