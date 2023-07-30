
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Fruit Details')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('fruitCreate', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Detalhes da fruta</h1>
    <hr>
    
    {{-- Formulário que leva para a edição dessa fruta --}}
    <form action="{{ route('fruits.edit', ['fruit' => $fruit]) }}" method="get">
        @csrf
        <button type="submit">Editar</button>
    </form>
    {{-- Botão que ativa o modal de confirmação de deleção --}}
    <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDelete">Deletar</button>
    <hr>

    {{-- Título da página com o nome da fruta --}}
    <h1 class="text-center">{{ $fruit->name }} - {{ $fruit->rarity->name }}</h1>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 text-center">
                <img src="/img/fruits/{{ $fruit->image }}" class="img-fluid bg-secondary rounded">
            </div>
            <div class="col-md-6">
                <h2 class="mb-3">Info:</h2>
                <ul>
                    <li>Nome: {{ $fruit->name }} </li>
                    <li>Raridade: {{ $fruit->rarity->name }} </li>
                    <li>Descrição: {{ $fruit->description }} </li>
                </ul>
            </div>
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
                    Tem certeza que quer deletar essa fruta? <strong>{{ $fruit->name }}</strong>
                </div>
                {{-- Parte inferior do modal --}}
                <div class="modal-footer">
                    {{-- Botão de fechar --}}
                    <button type="button" data-bs-dismiss="modal">Close</button>
                    {{-- Formulário que vai até a rota de DELETE --}}
                    <form action="{{ route('fruits.destroy', ['fruit' => $fruit]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
