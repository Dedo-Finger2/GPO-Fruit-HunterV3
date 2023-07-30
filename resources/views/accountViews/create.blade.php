
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Account create')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('accountCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Criando contas</h1>
    <hr>

    <form action="{{ route('accounts.store') }}" method="post" enctype="multipart/form-data">
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

        <label>Level</label>
        <input type="text" name="level">
        @error('level')
            {{$message}}
        @enderror

        <label>Bounty</label>
        <input type="text" name="bounty">
        @error('bounty')
            {{$message}}
        @enderror

        <label>Fruta</label>
        <select name="fruit_id">
            <option value="" selected></option>
            @foreach ($fruits as $fruit)
                <option value="{{ $fruit->id }}">{{ $fruit->name }}</option>
            @endforeach
        </select>
        @error('fruit_id')
            {{$message}}
        @enderror

        <button type="submit">Criar</button>
    </form>

@endsection
