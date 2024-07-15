@csrf
<div>
    <!-- Título del formulario -->
    <h1 class="uppercase font-bold text-2xl mb-6">Editar post</h1>
</div>

<!-- Campo para el título -->
<div class="mb-4">
    <label for="title" class="block text-gray-700 font-bold mb-2">Título</label>
    <input type="text" name="title" id="title" value="{{ old('title', $category->title) }}"
        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('title')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<!-- Campo para el slug -->
<div class="mb-4">
    <label for="slug" class="block text-gray-700 font-bold mb-2">Slug</label>
    <input type="text" name="slug" id="slug" value="{{ old('slug', $category->slug) }}"
        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('slug')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>
<!-- Botón de envío -->
<div class="text-center">
    <button type="submit"
        class="bg-blue-500 text-white font-bold py-2 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50">
        @if ($task == 'edit')
            Actualizar
        @else
            Crear post
        @endif
    </button>
</div>
