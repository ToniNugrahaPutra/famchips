@csrf

{{-- Preview Gambar --}}
    <div class="text-center mb-4">
        <label for="image" class="d-block">
        <img id="preview" 
             src="https://via.placeholder.com/300x300?text=Upload+Image"
             class="rounded border border-2"
             style="cursor:pointer; max-height: 300px; width: 300px; object-fit: cover;">
        </label>
        <input type="file" name="image" id="image" class="d-none" accept="image/*"
           onchange="previewImage(event)">
    </div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="name" class="form-label">Nama</label>
        <input type="text" class="form-control" name="name" 
               value="{{ old('name', $product->name ?? '') }}"
               placeholder="Masukkan nama" required>
    </div>
    <div class="col-md-6">
        <label for="weight" class="form-label">Berat</label>
        <input type="text" class="form-control" name="weight" 
               value="{{ old('weight', $product->weight ?? '') }}"
               placeholder="Masukkan berat" required>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="variant" class="form-label">Varian</label>
        <input type="text" class="form-control" name="variant" 
               value="{{ old('variant', $product->variant ?? '') }}"
               placeholder="Masukkan varian" required>
    </div>
    <div class="col-md-6">
        <label for="expired_date" class="form-label">Masa Simpan</label>
        <input type="date" class="form-control" name="expired_date" 
               value="{{ old('expired_date', $product->expired_date ?? '') }}"
               required>
    </div>
</div>

<div class="mb-3">
    <label for="ingredients" class="form-label">Ingredients</label>
    <textarea name="ingredients" class="form-control" rows="2" placeholder="Masukkan bahan" required>{{ old('ingredients', $product->ingredients ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label for="description" class="form-label">Deskripsi</label>
    <textarea name="description" class="form-control" rows="3" placeholder="Masukkan deskripsi">{{ old('description', $product->description ?? '') }}</textarea>
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
