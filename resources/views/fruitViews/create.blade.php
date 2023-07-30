
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'FruitCreate')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('fruitCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Criando frutas</h1>
    <hr>
    <form action="{{ route('fruits.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <label>Nome</label>
        <input type="text" name="name">
        @error('name')
            {{$message}}
        @enderror

        <button type="submit">Criar</button>
    </form>

@endsection
