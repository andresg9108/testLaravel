@extends('template')

@section('head')
    <title>{{ $entrada->title }}</title>
@endsection

@section('contenido')
    <h1>{{ $entrada->title }} - {{ $entrada->user->name }}</h1>

    <br>

    <p>{{ $entrada->body }}</p>
@endsection