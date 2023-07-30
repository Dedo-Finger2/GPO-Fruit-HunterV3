
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Fruit Edit')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('fruitCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Editando fruta</h1>
    <hr>
    <form action="{{ route('fruits.update', ['fruit'=>$fruit]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Imagem</label>
        <input type="file" name="image" value="{{ $fruit->image }}">
        @error('image')
            {{$message}}
        @enderror

        <label>Nome</label>
        <input type="text" name="name" value="{{ $fruit->name }}">
        @error('name')
            {{$message}}
        @enderror

        <label>Raridades</label>
        <select name="rarity_id">
            @foreach ($rarities as $rarity)
                @if ($rarity->id == $fruit->rarity->id)
                    <option value="{{ $rarity->id }}" selected>{{ $rarity->name }}</option>
                @else
                    <option value="{{ $rarity->id }}">{{ $rarity->name }}</option>
                @endif
            @endforeach
        </select>
        @error('rarity_id')
            {{$message}}
        @enderror

        <label>Descrição</label>
        <textarea name="description" cols="30" rows="10">{{ $fruit->description }}</textarea>
        @error('description')
            {{$message}}
        @enderror

        <button type="submit">Editar</button>
    </form>

@endsection
