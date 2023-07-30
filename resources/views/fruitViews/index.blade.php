{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Frutis')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('fruit', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Listagem de frutas</h1>
    <hr>

    @foreach ($fruits as $fruit)
        <div class="card" style="width: 18rem;">
            <div class="card-header">
                {{ $fruit->name }}
            </div>
            <img src="/img/fruits/{{ $fruit->image }}" class="card-img-top" alt="...">
            <div class="card-body">
                <p class="card-text">{{ $fruit->description }}</p>
            </div>
        </div>
    @endforeach

@endsection
