{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Account create')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('accountCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1 class="display-4">Criando contas</h1>
    <hr class="my-4">

    <form action="{{ route('accounts.store') }}" method="post" enctype="multipart/form-data">
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
            <label for="level">Level</label>
            <input type="text" class="form-control" name="level" id="level">
            @error('level')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="bounty">Bounty</label>
            <input type="text" class="form-control" name="bounty" id="bounty">
            @error('bounty')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="fruit_id">Fruta</label>
            <select class="form-control" name="fruit_id" id="fruit_id">
                <option value="" selected></option>
                @foreach ($fruits as $fruit)
                    <option value="{{ $fruit->id }}">{{ $fruit->name }}</option>
                @endforeach
            </select>
            @error('fruit_id')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>

@endsection
