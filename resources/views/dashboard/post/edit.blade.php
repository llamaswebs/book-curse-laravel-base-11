@extends('dashboard.master')

@section('content')
    <form action="{{ route('post.update', $post->id) }}" method="post" enctype="multipart/form-data"
        class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-2xl border">

        @method('PATCH')
        @include('dashboard.post._from',['task'=>'edit'])
    </form>
@endsection
