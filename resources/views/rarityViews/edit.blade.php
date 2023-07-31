{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'RarityEdit')
@section('rarityCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1 class="display-4">Editando raridade</h1>
    <hr class="my-4">

    <form action="{{ route('rarities.update', ['rarity'=>$rarity]) }}" method="post">
        @csrf
        @method('PUT')
        <input type="hidden" name="rarity_id" value="{{ $rarity->id }}">

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $rarity->name }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="chances_on_getting">Chances de pegar</label>
            <input type="text" class="form-control" name="chances_on_getting" id="chances_on_getting" value="{{ $rarity->chances_on_getting }}">
            @error('chances_on_getting')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="class">Class</label>
            <input type="text" class="form-control" name="class" id="class" value="{{ $rarity->class }}">
            @error('class')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

@endsection
