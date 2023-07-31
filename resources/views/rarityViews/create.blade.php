{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'RarityCreate')
@section('rarityCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1 class="display-4">Criando raridades</h1>
    <hr class="my-4">

    <form action="{{ route('rarities.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="name" id="name">
            @error('name')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="chances_on_getting">Chances de pegar</label>
            <input type="text" class="form-control" name="chances_on_getting" id="chances_on_getting">
            @error('chances_on_getting')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="class">Class</label>
            <input type="text" class="form-control" name="class" id="class">
            @error('class')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>

@endsection
