@extends('dashboard.master')

@section('content')
    <div class="bg-gray-100 py-10 px-4">
        <div class="overflow-x-auto w-full max-w-7xl mx-auto px-6">
            <h1 class="text-2xl font-bold mb-6">Titulo Posted Category</h1>

            <a href="{{ route('category.create') }}"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">
                Crear
            </a>

            <table class="min-w-full bg-white shadow-md rounded my-6">
                <thead>
                    <tr class="bg-gray-800 text-white">
                        <th class="py-3 px-6 text-left">Id</th>
                        <th class="py-3 px-6 text-left">Titulo</th>
                        <th class="py-3 px-6 text-left">Opciones</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($categories as $c)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $c->id }}</td>
                            <td class="py-3 px-6">{{ $c->title }}</td>
                            <td class="py-3 px-6  flex items-center  gap-3">
                                <a href="{{ route('category.edit', $c->id) }}"
                                    class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">
                                    Modificar
                                </a>
                                <a href="{{ route('category.show', $c->id) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">
                                    Mostrar
                                </a>
                                <form action="{{ route('category.destroy', $c->id) }}" method="POST">
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
                {{ $categories->links('pagination::tailwind-custom') }}
            </div>
        </div>
    </div>
@endsection
