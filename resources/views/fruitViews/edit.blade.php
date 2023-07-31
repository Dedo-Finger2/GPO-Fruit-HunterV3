{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Fruit Edit')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('fruitCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1 class="display-4">Editando fruta</h1>
    <hr class="my-4">
    <form action="{{ route('fruits.update', ['fruit'=>$fruit]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="image">Imagem</label>
            <input type="file" class="form-control" name="image" id="image">
            @error('image')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name" value="{{ $fruit->name }}">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="rarity_id">Raridades</label>
            <select class="form-control" name="rarity_id" id="rarity_id">
                @foreach ($rarities as $rarity)
                    @if ($rarity->id == $fruit->rarity->id)
                        <option value="{{ $rarity->id }}" selected>{{ $rarity->name }}</option>
                    @else
                        <option value="{{ $rarity->id }}">{{ $rarity->name }}</option>
                    @endif
                @endforeach
            </select>
            @error('rarity_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="description">Descrição</label>
            <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $fruit->description }}</textarea>
            @error('description')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Editar</button>
    </form>

@endsection
