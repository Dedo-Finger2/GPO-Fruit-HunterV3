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
    {{-- Se houver uma mensagem de sucesso, então mostre ela na tela --}}
    @if (session('success'))
        <h3 class="mt-5 mb-5 text-center">{{ session('success') }}</h3>
    @endif

    {{-- Container principal dos cards --}}
    <div class="container">
        {{-- Coluna --}}
        <div class="row">
            {{-- Executando uma ação para cada raridade --}}
            @foreach ($rarities as $rarity)
                <div class="col-md-4 mb-5">
                    {{-- Transformando o card em um link --}}
                    <a href="{{ route('rarities.show', ['rarity' => $rarity]) }}" class="text-decoration-none">
                        <div class="card text-center">
                            {{-- Título do card --}}
                            <div class="card-header text-center"><strong>{{ $rarity->chances_on_getting }}%</strong></div>
                            {{-- Corpo do card --}}
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $rarity->name }}</h5>
                                {{-- Aqui pode ser inserido uma badge dessa raridade --}}
                                @switch($rarity->name)
                                    @case('Mythic')
                                        <span class="badge bg-info-subtle border border-info-subtle text-info-emphasis rounded-pill">Mythic</span>
                                    @break
                                    @case('Legendary')
                                        <span class="badge bg-warning-subtle border border-warning-subtle text-warning-emphasis rounded-pill">Legendary</span>
                                    @break
                                    @case('Epic')
                                        <span class="badge bg-danger-subtle border border-danger-subtle text-danger-emphasis rounded-pill">Epic</span>
                                    @break
                                    @case('Rare')
                                        <span class="badge bg-primary-subtle border border-primary-subtle text-primary-emphasis rounded-pill">Rare</span>
                                    @break
                                    @case('Uncommon')
                                        <span class="badge bg-success-subtle border border-success-subtle text-success-emphasis rounded-pill">Uncommon</span>
                                    @break
                                    @case('Common')
                                        <span class="badge bg-dark-subtle border border-dark-subtle text-dark-emphasis rounded-pill">Common</span>
                                    @break
                                @endswitch
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>


@endsection
