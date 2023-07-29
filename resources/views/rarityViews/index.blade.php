{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Rarities')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('rarity', 'active')

{{-- Conteúdo da página --}}
@section('content')

    {{-- Título da página --}}
    <h1>Visualização de raridades</h1>
    <hr>

    {{-- Container principal dos cards --}}
    <div class="container">
        {{-- Coluna --}}
        <div class="row">
            {{-- Executando uma ação para cada raridade --}}
            @foreach ($rarities as $rarity)
                <div class="col-md-4 mb-5">
                    {{-- Transformando o card em um link --}}
                    <a href="{{-- aqui dentro vai estar a rota de edição e um array com a instância da raridade --}}" class="text-decoration-none">
                        <div class="card text-center">
                            {{-- Título do card --}}
                            <div class="card-header">Raridade</div>
                            {{-- Corpo do card --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $rarity->name }}</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                {{-- Aqui pode ser inserido uma badge dessa raridade --}}
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endsection
