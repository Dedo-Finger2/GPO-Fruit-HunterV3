
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
        <label>Imagem</label>
        <input type="file" name="image">
        @error('image')
            {{$message}}
        @enderror
        
        <label>Nome</label>
        <input type="text" name="name">
        @error('name')
            {{$message}}
        @enderror

        <label>Raridades</label>
        <select name="rarity_id">
            <option value="" selected></option>
            @foreach ($rarities as $rarity)
                <option value="{{ $rarity->id }}">{{ $rarity->name }}</option>
            @endforeach
        </select>
        @error('rarity_id')
            {{$message}}
        @enderror

        <label>Descrição</label>
        <textarea name="description" cols="30" rows="10"></textarea>
        @error('description')
            {{$message}}
        @enderror

        <button type="submit">Criar</button>
    </form>

@endsection
