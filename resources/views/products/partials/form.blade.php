@csrf

{{-- Preview Gambar --}}
<div class="mb-6 text-center">
    <label for="image" class="block cursor-pointer">
        <img id="preview" 
             src="{{ isset($product) && $product->image 
                        ? asset('storage/'.$product->image) 
                        : 'https://via.placeholder.com/300x200?text=Upload+Image' }}"
             class="mx-auto rounded-lg border border-gray-300 shadow-sm max-h-64 max-w-xs object-cover">
    </label>
    <input type="file" name="image" id="image" class="hidden" accept="image/*"
           onchange="previewImage(event)">
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nama</label>
        <input type="text" name="name" id="name"
               value="{{ old('name', $product->name ?? '') }}"
               placeholder="Masukkan nama"
               required
               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-lime-500 focus:ring focus:ring-lime-200">
    </div>

    <div>
        <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">Berat</label>
        <input type="text" name="weight" id="weight"
               value="{{ old('weight', $product->weight ?? '') }}"
               placeholder="Masukkan berat"
               required
               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-lime-500 focus:ring focus:ring-lime-200">
    </div>
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    <div>
        <label for="variant" class="block text-sm font-medium text-gray-700 mb-1">Varian</label>
        <input type="text" name="variant" id="variant"
               value="{{ old('variant', $product->variant ?? '') }}"
               placeholder="Masukkan varian"
               required
               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-lime-500 focus:ring focus:ring-lime-200">
    </div>

    <div>
        <label for="expired_date" class="block text-sm font-medium text-gray-700 mb-1">Masa Simpan</label>
        <input type="date" name="expired_date" id="expired_date"
               value="{{ old('expired_date', $product->expired_date ?? '') }}"
               required
               class="w-full rounded-lg border-gray-300 shadow-sm focus:border-lime-500 focus:ring focus:ring-lime-200">
    </div>
</div>

<div class="mb-6">
    <label for="ingredients" class="block text-sm font-medium text-gray-700 mb-1">Ingredients</label>
    <textarea name="ingredients" id="ingredients" rows="2" required
              placeholder="Masukkan bahan"
              class="w-full rounded-lg border-gray-300 shadow-sm focus:border-lime-500 focus:ring focus:ring-lime-200">{{ old('ingredients', $product->ingredients ?? '') }}</textarea>
</div>

<div class="mb-6">
    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Deskripsi</label>
    <textarea name="description" id="description" rows="3"
              placeholder="Masukkan deskripsi"
              class="w-full rounded-lg border-gray-300 shadow-sm focus:border-lime-500 focus:ring focus:ring-lime-200">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="flex justify-end">
    <button type="submit" 
            class="px-6 py-2 bg-lime-600 hover:bg-lime-700 text-white font-medium rounded-lg shadow">
        {{ $submit ?? 'Simpan' }}
    </button>
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

{{-- CKEditor 5 CDN & Init --}}
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .catch(error => {
            console.error(error);
        });
</script>
