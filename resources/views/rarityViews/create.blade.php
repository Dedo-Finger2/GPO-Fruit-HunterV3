
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
        <label>Chances de pegar</label>
        <input type="text" name="chances_on_getting">
        @error('chances_on_getting')
            {{$message}}
        @enderror
        <label>Class</label>
        <input type="text" name="class">
        @error('class')
            {{$message}}
        @enderror

        <button type="submit">Criar</button>
    </form>

@endsection
