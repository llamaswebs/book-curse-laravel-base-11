@extends('dashboard.master')

@section('content')
    <div class="bg-gray-100">
        <div class="max-w-4xl mx-auto mt-10 bg-white shadow-md rounded-lg overflow-hidden">
            <div class="p-6">
                {{-- Título del post --}}
                <h1 class="text-3xl font-bold mb-4">{{ $category->title }}</h1>
            </div>
        </div>
    </div>
@endsection
