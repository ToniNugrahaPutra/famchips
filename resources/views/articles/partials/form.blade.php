{{-- Preview Gambar --}}
<div class="text-center mb-6">
    <label for="image" class="cursor-pointer inline-block">
        <img id="preview" 
             src="{{ isset($article) && $article->image 
                        ? asset('storage/'.$article->image) 
                        : 'https://via.placeholder.com/300x200?text=Upload+Image' }}"
             class="rounded-lg border-2 border-gray-300 mx-auto"
             style="max-height: 250px; max-width: 300px; object-fit: cover;">
    </label>
    <input type="file" name="image" id="image" class="hidden" accept="image/*"
           onchange="previewImage(event)">
    @error('image')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
    {{-- Judul --}}
    <div>
        <label for="title" class="block text-sm font-medium text-gray-700">Judul Artikel</label>
        <input type="text" name="title" id="title"
               value="{{ old('title', $article->title ?? '') }}"
               placeholder="Masukkan judul artikel"
               required
               class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
        @error('title')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>

    {{-- Status --}}
    <div>
        <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
        <select name="status" id="status" required
                class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
            <option value="draft" {{ old('status', $article->status ?? '') === 'draft' ? 'selected' : '' }}>Draft</option>
            <option value="published" {{ old('status', $article->status ?? '') === 'published' ? 'selected' : '' }}>Published</option>
        </select>
        @error('status')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
</div>

{{-- Deskripsi --}}
<div class="mb-6">
    <label for="description" class="block text-sm font-medium text-gray-700">Deskripsi</label>
    <textarea name="description" id="description" rows="10"
              placeholder="Tulis deskripsi..."
              required
              class="mt-1 block w-full rounded-lg border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">{{ old('description', $article->description ?? '') }}</textarea>
    @error('description')
    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

{{-- Tombol --}}
<div class="flex justify-end">
    <button type="submit"
            class="px-6 py-2 bg-green-600 text-white rounded-lg shadow hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-green-500">
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
