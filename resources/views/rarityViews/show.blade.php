{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Rarity Details')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Detalhes da raridade</h1>
    {{-- Formulário que leva para a edição dessa raridade --}}
    <form action="{{ route('rarities.edit', ['rarity'=>$rarity]) }}" method="get">
        @csrf
        <button type="submit">Editar</button>
    </form>
    {{-- Botão que ativa o modal de confirmação de deleção --}}
    <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDelete">Deletar</button>
    <hr>

    {{-- Título da página com o nome da raridade --}}
    <h1 class="text-center">{{ $rarity->name }}</h1>

    <hr>

    {{-- Frutas dessa raridade em card com imagem --}}
    <h2 class="mt-5 mb-5 text-center">Frutas</h2>


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
                    <form action="{{ route('rarities.destroy', ['rarity'=>$rarity]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
