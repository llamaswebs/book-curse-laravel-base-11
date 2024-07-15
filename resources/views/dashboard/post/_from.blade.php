@csrf
<div>
    <!-- Título del formulario -->
    <h1 class="uppercase font-bold text-2xl mb-6">Editar post</h1>
</div>

<!-- Campo para el título -->
<div class="mb-4">
    <label for="title" class="block text-gray-700 font-bold mb-2">Título</label>
    <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}"
        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('title')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<!-- Campo para el slug -->
<div class="mb-4">
    <label for="slug" class="block text-gray-700 font-bold mb-2">Slug</label>
    <input type="text" name="slug" id="slug" value="{{ old('slug', $post->slug) }}"
        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
    @error('slug')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<!-- Campo para el contenido -->
<div class="mb-4">
    <label for="content" class="block text-gray-700 font-bold mb-2">Contenido</label>
    <textarea name="content" id="content"
        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('content', $post->content) }}</textarea>
    @error('content')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<!-- Campo para la categoría -->
<div class="mb-4">
    <label for="category_id" class="block text-gray-700 font-bold mb-2">Categoría</label>
    <select name="category_id" id="category_id"
        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @foreach ($categories as $title => $id)
            <option {{ old('category_id', $post->category_id) == $id ? 'selected' : '' }} value="{{ $id }}">
                {{ $title }}
            </option>
        @endforeach
    </select>
    @error('category_id')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<!-- Campo para la descripción -->
<div class="mb-4">
    <label for="descripcion" class="block text-gray-700 font-bold mb-2">Descripción</label>
    <textarea name="descripcion" id="descripcion"
        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('descripcion', $post->descripcion) }}</textarea>
    @error('descripcion')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<!-- Campo para el estado del post -->
<div class="mb-4">
    <label for="posted" class="block text-gray-700 font-bold mb-2">Postear</label>
    <select name="posted" id="posted"
        class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        <option {{ old('posted', $post->posted) == 'not' ? 'selected' : '' }} value="not">No</option>
        <option {{ old('posted', $post->posted) == 'yes' ? 'selected' : '' }} value="yes">Sí</option>
    </select>
    @error('posted')
        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
    @enderror
</div>

<!-- Campo para la imagen, si la tarea es editar -->
@if (isset($task) && $task == 'edit')
    <div class="mb-4">
        <label for="image" class="block text-gray-700 font-bold mb-2">Imagen</label>
        <input type="file" name="image" id="image"
            class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
        @error('image')
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
        @enderror
    </div>
@endif

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
