@extends('dashboard.master')

@section('content')
    <div class="bg-gray-100 py-10 px-4">
        <div class="overflow-x-auto w-full max-w-7xl mx-auto px-6">
            <h1 class="text-2xl font-bold mb-6">Titulo Posted Category</h1>

            <a href="{{ route('post.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                Crear
            </a>

            <table class="min-w-full bg-white shadow-md rounded my-6">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-6 text-left">Id</th>
                        <th class="py-3 px-6 text-left">Titulo</th>
                        <th class="py-3 px-6 text-left">Postear</th>
                        <th class="py-3 px-6 text-left">Categoria</th>
                        <th class="py-3 px-6 text-left">Opciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($posts as $p)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $p->id }}</td>
                            <td class="py-3 px-6">{{ $p->title }}</td>
                            <td class="py-3 px-6">{{ $p->posted }}</td>
                            <td class="py-3 px-6">{{ $p->category->title }}</td>
                            <td class="py-3 px-6  flex items-center  gap-3">
                                <a href="{{ route('post.edit', $p->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">
                                    Modificar
                                </a>
                                <a href="{{ route('post.show', $p->id) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">
                                    Mostrar
                                </a>
                                <form action="{{ route('post.destroy', $p->id) }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Eliminar</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="mt-4">
                {{ $posts->links('pagination::tailwind-custom') }}
            </div>
        </div>
    </div>
@endsection
