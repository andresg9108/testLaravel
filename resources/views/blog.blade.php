@extends('template')

@section('head')
    <title>Blog</title>
@endsection

@section('contenido')
    <h1>Blog</h1>

    <ul>
        @foreach($entradas as $entrada)
            <li>
                <a href="{{ route('entrada', $entrada->entrada_id) }}">
                    <strong>{{ $entrada->title }}</strong> - {{ $entrada->user->name }}
                </a> 
                - {{ $entrada->created_at->format('d/m/Y') }}
            </li>
        @endforeach
    </ul>

    {{ $entradas->links() }}
@endsection