{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Rarity Details')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Detalhes da raridade</h1>
    {{-- Formulário que leva para a edição dessa raridade --}}
    <form action="{{ route('rarities.edit', ['rarity' => $rarity]) }}" method="get">
        @csrf
        <button type="submit">Editar</button>
    </form>
    {{-- Botão que ativa o modal de confirmação de deleção --}}
    <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDelete">Deletar</button>
    <hr>

    {{-- Título da página com o nome da raridade --}}
    <h1 class="text-center">{{ $rarity->name }} - {{ $rarity->chances_on_getting }}%</h1>

    <hr>

    {{-- Frutas dessa raridade em card com imagem --}}
    <h2 class="mt-5 mb-5 text-center">Frutas</h2>

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
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    {{-- Modal de confirmação de deleção de dados --}}
    <div class="modal fade" id="confirmDelete" tabindex="-1" aria-labelledby="confirmDelete" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                {{-- Parte superior do modal --}}
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="confirmDelete">Confirmar deleção?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- Conteúdo do modal --}}
                <div class="modal-body">
                    Tem certeza que quer deletar essa raridade? <strong>{{ $rarity->name }}</strong>
                </div>
                {{-- Parte inferior do modal --}}
                <div class="modal-footer">
                    {{-- Botão de fechar --}}
                    <button type="button" data-bs-dismiss="modal">Close</button>
                    {{-- Formulário que vai até a rota de DELETE --}}
                    <form action="{{ route('rarities.destroy', ['rarity' => $rarity]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
