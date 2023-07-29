
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Home')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('home', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Home da aplicação</h1>
    <hr>

@endsection
