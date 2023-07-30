
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Frutis')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('fruit', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Listagem de frutas</h1>
    <hr>

@endsection
