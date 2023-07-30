{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Account list')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('account', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Listagem de contas</h1>
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
            @foreach ($accounts as $account)
                <div class="col-md-4 mb-5">
                    {{-- Transformando o card em um link --}}
                    <a href="{{ route('accounts.show', ['account' => $account]) }}" class="text-decoration-none">
                        <div class="card text-center">
                            {{-- Título do card --}}
                            <div class="card-header text-center"><strong>{{ $account->name }}</strong></div>
                            <img src="/img/accounts/{{ $account->image }}" class="card-img-top img-fluid"
                                alt="{{ $account->name }}" style="max-height: 27rem;">
                            {{-- Corpo do card --}}
                            <div class="card-body">
                                <h5 class="card-title text-center">{{ $account->name }}</h5>
                                <hr>
                                <p class="card-text">Level: {{ $account->level }}</p>
                                <p class="card-text">Bounty: {{ $account->bounty }}k</p>
                                {{-- Aqui pode ser inserido uma badge dessa raridade --}}
                                <a href="{{ route('fruits.show', ['fruit'=>$account->fruit]) }}" class="text-decoration-none"><span class="badge {{ $account->fruit->rarity->class }} ">{{ $account->fruit->name }}</span></a>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
