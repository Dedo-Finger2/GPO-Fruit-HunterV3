
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'xxx')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('xxx', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Editando data</h1>
    <hr>

    <form action="{{ route('collection_Days.update',['collection_Day'=>$collection_Day]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="date">Data</label>
        <input type="date" name="date" value="{{ $collection_Day->date }}">

        <button type="submit">Editar</button>
    </form>

@endsection
