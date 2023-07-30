
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'FruitEdit')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('fruitCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Editando fruta</h1>
    <hr>

@endsection
