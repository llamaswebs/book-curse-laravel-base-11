@extends('dashboard.master')

@section('content')
    <form action="{{ route('category.update', $category->id) }}" method="post"
        class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-2xl border">

        @method('PATCH')
        @include('dashboard.category._from', ['task' => 'edit'])
    </form>
@endsection
