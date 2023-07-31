{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'FruitCreate')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('fruitCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1 class="display-4">Criando frutas</h1>
    <hr class="my-4">

    <form action="{{ route('fruits.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" class="form-control" name="image" id="image">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="rarity_id">Raridades</label>
            <select class="form-control" name="rarity_id" id="rarity_id">
                <option value="" selected></option>
                @foreach ($rarities as $rarity)
                    <option value="{{ $rarity->id }}">{{ $rarity->name }}</option>
                @endforeach
            </select>
            @error('rarity_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>

@endsection
