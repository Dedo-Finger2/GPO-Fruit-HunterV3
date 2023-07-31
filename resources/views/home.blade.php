{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Home')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('home', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Home da aplicação</h1>
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
            @foreach ($collection_days as $collection_Day)
                <div class="col-md-4 mb-5">
                    {{-- Transformando o card em um link --}}
                    <a href="{{ route('collection_Days.show', ['collection_Day' => $collection_Day]) }}"
                        class="text-decoration-none">
                        <div class="card text-center">
                            {{-- Título do card --}}
                            <div class="card-header text-center"><strong>You've got {{ count($collection_Day->fruits) }}
                                    fruits! </strong></div>
                            {{-- Corpo do card --}}
                            <div class="card-body">
                                <h5 class="card-title text-center"> {{ $collection_Day->date }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
