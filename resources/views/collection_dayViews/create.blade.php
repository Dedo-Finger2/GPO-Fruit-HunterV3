{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Collection_day create')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('collection_dayCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1 class="display-4">Criando dias</h1>
    <hr class="my-4">

    <form action="{{ route('collection_Days.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="date">Data</label>
            <input type="date" class="form-control" name="date" id="date">
        </div>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>

@endsection
