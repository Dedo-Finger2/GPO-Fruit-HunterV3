
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'xxx')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('xxx', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Criando daily hunt</h1>
    <hr>

    <form action="{{ route('daily_Collections.store') }}" method="post">
        @csrf

        <label for="date">Dia</label>
        <select name="date_id" id="date">
            @foreach ($collection_days as $collection_day)
                <option value="{{ $collection_day->id }}">{{ $collection_day->date }}</option>
            @endforeach
        </select>

        <label for="fruit">Fruta</label>
        <select name="fruit_id" id="fruit">
            @foreach ($fruits as $fruit)
                <option value="{{ $fruit->id }}">{{ $fruit->name }}</option>
            @endforeach
        </select>

        <button type="submit">Enviar</button>
    </form>

@endsection
