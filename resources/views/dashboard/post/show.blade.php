@extends('dashboard.master')

@section('content')
    <div class="bg-gray-100">
        <div class="max-w-4xl mx-auto mt-10 bg-white shadow-md rounded-lg overflow-hidden">

            {{-- Imagen del post (si está disponible) con object-cover --}}
            @isset($post->image)
                <img class="w-full h-72 object-cover" src="/uploads/post/{{ $post->image }}" alt="{{ $post->title }}">
            @endisset

            <div class="p-6">
                {{-- Título del post --}}
                <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>

                {{-- Slug del post --}}
                <p class="text-sm text-gray-600 mb-2">Slug: {{ $post->slug }}</p>

                {{-- Descripción del post --}}
                <p class="text-lg text-gray-800 mb-4">{{ $post->descripcion }}</p>

                {{-- Contenido del post --}}
                <div class="prose prose-sm text-gray-700">
                    {!! nl2br(e($post->content)) !!}
                </div>

                {{-- Estado de publicación --}}
                <p class="text-sm text-gray-500 mt-4">
                    Posted: {{ $post->posted }}
                </p>

                {{-- Fechas de creación y actualización --}}
                <p class="text-sm text-gray-500 mt-2">
                    Created at: {{ $post->created_at }}<br>
                    Updated at: {{ $post->updated_at }}
                </p>

                {{-- Categoría del post --}}
                <p class="text-sm text-gray-500 mt-2">
                    Category ID: {{ $post->category_id }}
                </p>
            </div>
        </div>
    </div>
@endsection
