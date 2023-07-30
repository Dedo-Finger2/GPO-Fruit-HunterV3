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

    {{-- Se houver uma mensagem de sucesso, então mostre ela na tela --}}
    @if (session('success'))
        <h3 class="mt-5 mb-5 text-center">{{ session('success') }}</h3>
    @endif

    {{-- Container principal dos cards --}}
    <div class="container">
        {{-- Coluna --}}
        <div class="row">
            {{-- Executando uma ação para cada raridade --}}
            @foreach ($fruits as $fruit)
                <div class="col-md-4 mb-5">
                    {{-- Transformando o card em um link --}}
                    <a href="{{ route('fruits.show', ['fruit' => $fruit]) }}" class="text-decoration-none">
                        <div class="card text-center">
                            {{-- Título do card --}}
                            <div class="card-header text-center"><strong>{{ $fruit->name }}</strong></div>
                            <img src="/img/fruits/{{ $fruit->image }}" class="card-img-top img-fluid"
                                alt="{{ $fruit->name }}" style="max-height: 20rem;">
                            {{-- Corpo do card --}}
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $fruit->name }}</h5>
                                <hr>
                                <p class="card-text">{{ $fruit->description }}</p>
                                {{-- Aqui pode ser inserido uma badge dessa raridade --}}
                                <span class="badge {{ $fruit->rarity->class }} ">{{ $fruit->rarity->name }}</span>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
