
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Account edit')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('account', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Editando conta</h1>
    <hr>

    <form action="{{ route('accounts.update',['account'=>$account]) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <label>Imagem</label>
        <input type="file" name="image">
        @error('image')
            {{$message}}
        @enderror

        <label>Nome</label>
        <input type="text" name="name" value="{{ $account->name }}">
        @error('name')
            {{$message}}
        @enderror

        <label>Level</label>
        <input type="text" name="level" value="{{ $account->level }}">
        @error('level')
            {{$message}}
        @enderror

        <label>Bounty</label>
        <input type="text" name="bounty" value="{{ $account->bounty }}">
        @error('bounty')
            {{$message}}
        @enderror

        <label>Fruta</label>
        <select name="fruit_id">
            @foreach ($fruits as $fruit)
                @if ($fruit->id == $account->fruit->id)
                    <option value="{{ $fruit->id }}" selected>{{ $fruit->name }}</option>
                @else
                    <option value="{{ $fruit->id }}">{{ $fruit->name }}</option>
                @endif
            @endforeach
        </select>
        @error('fruit_id')
            {{$message}}
        @enderror

        <button type="submit">Criar</button>
    </form>

@endsection
