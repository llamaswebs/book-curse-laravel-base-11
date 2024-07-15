@extends('dashboard.master')

@section('content')
    <form action="{{ route('category.store') }}" method="POST" class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-2xl border">
        @include('dashboard.category._from',['task'=>'create'])

    </form>
@endsection
