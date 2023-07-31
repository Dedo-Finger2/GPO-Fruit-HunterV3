{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Day details')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('xxx', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Detalhes do dia</h1>
    <hr>

    <h2 class="text-center mt-5">Date: {{ $collection_Day->date }}</h2>

    <form action="{{ route('collection_Days.edit', ['collection_Day' => $collection_Day]) }}" method="get">
        @csrf
        <button type="submit">Editar</button>
    </form>
    {{-- Botão que ativa o modal de confirmação de deleção --}}
    <button type="button" data-bs-toggle="modal" data-bs-target="#confirmDelete">Deletar</button>
    <hr>

    {{-- Container principal dos cards --}}
    <div class="container">
        {{-- Coluna --}}
        <div class="row">
            {{-- Executando uma ação para cada raridade --}}
            <div class="col-md-4 mb-5">
                {{-- Transformando o card em um link --}}
                <div class="card text-center">
                    {{-- Título do card --}}
                    <div class="card-header text-center"><strong>{{ $collection_Day->date }}</strong></div>
                    {{-- Corpo do card --}}
                    <div class="card-body">
                        <h5 class="card-title text-center">{{ $collection_Day->date }}</h5>
                    </div>
                </div>
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
                    Tem certeza que quer deletar essa data? <strong>{{ $collection_Day->date }}</strong>
                </div>
                {{-- Parte inferior do modal --}}
                <div class="modal-footer">
                    {{-- Botão de fechar --}}
                    <button type="button" data-bs-dismiss="modal">Close</button>
                    {{-- Formulário que vai até a rota de DELETE --}}
                    <form action="{{ route('collection_Days.destroy', ['collection_Day' => $collection_Day]) }}"
                        method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Deletar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
