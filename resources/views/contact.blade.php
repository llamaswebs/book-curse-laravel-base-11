@extends('master')
@section('contect')
    <h1>Esta es la pagina 1 del contacto</h1>

    {{-- <a href="{{ route('contac2') }}">Contac 2</a> --}}
    {{ $posts[0] }}
@endsection
