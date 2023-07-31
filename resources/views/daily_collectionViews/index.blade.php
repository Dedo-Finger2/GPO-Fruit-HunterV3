
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Daily collection list')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('daily_collection', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Listagem de daily collections</h1>
    <hr>

    {{-- Se houver uma mensagem de sucesso, então mostre ela na tela --}}
    @if (session('success'))
        <h3 class="mt-5 mb-5 text-center">{{ session('success') }}</h3>
    @endif

    {{-- Container principal dos cards --}}
    <div class="container">
        {{-- Coluna --}}
        <div class="row">
            {{-- Executando uma ação para cada raridade --}}
            @foreach ($daily_collections as $daily_collection)
                <div class="col-md-4 mb-5">
                    {{-- Transformando o card em um link --}}
                    <a href="" class="text-decoration-none">
                        <div class="card text-center">
                            {{-- Título do card --}}
                            <div class="card-header text-center"><strong>Daily collection</strong></div>
                            {{-- Corpo do card --}}
                            <div class="card-body">
                                <h5 class="card-title text-center">Frutas</h5>
                                {{ $daily_collection->fruit->name }}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
