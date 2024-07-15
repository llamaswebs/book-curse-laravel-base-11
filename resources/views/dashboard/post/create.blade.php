@extends('dashboard.master')

@section('content')
    <form action="{{ route('post.store') }}" method="POST" class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-2xl border">
        @include('dashboard.post._from',['task'=>'crear'])

    </form>
@endsection
