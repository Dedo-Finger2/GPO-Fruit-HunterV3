
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Collection_day create')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('collection_dayCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Criando dias</h1>
    <hr>
    <form action="{{ route('collection_Days.store') }}" method="post">
        @csrf
        <label for="date">Data</label>
        <input type="date" name="date">

        <button type="submit">Criar</button>
    </form>

@endsection
