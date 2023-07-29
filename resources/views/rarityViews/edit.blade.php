
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'RarityEdit')
@section('rarityCreate', 'active')
{{-- Conteúdo da página --}}
@section('content')

    <h1>Editando raridade</h1>
    <hr>
    <form action="{{ route('rarities.update', ['rarity'=>$rarity]) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="rarity_id" value="{{ $rarity->id }}">
        <label>Nome</label>
        <input type="text" name="name" value="{{ $rarity->name }}">
        @error('name')
            {{$message}}
        @enderror

        <button type="submit">Editar</button>
    </form>

@endsection
