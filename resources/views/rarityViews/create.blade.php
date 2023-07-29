
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'RarityCreate')
@section('rarityCreate', 'active')
{{-- Conteúdo da página --}}
@section('content')

    <h1>Criando raridades</h1>
    <hr>
    <form action="{{ route('rarities.store') }}" method="post">
        @csrf
        <label>Nome</label>
        <input type="text" name="name">
        @error('name')
            {{$message}}
        @enderror

        <button type="submit">Criar</button>
    </form>

@endsection
