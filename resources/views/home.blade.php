{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Home')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('home', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1 class="display-4 text-center">Home da aplicação</h1>
    <hr class="my-4">

    {{-- Se houver uma mensagem de sucesso, então mostre ela na tela --}}
    @if (session('success'))
        <div class="alert alert-success mt-5 mb-5 text-center" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('home.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="fruit">Fruta</label>
            <select class="form-control" name="fruit_id" id="fruit">
                @foreach ($fruits as $fruit)
                    <option value="{{ $fruit->id }}">{{ $fruit->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="hidden" name="date_id" value="">

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

    <hr class="my-4">
    {{-- Container principal dos cards --}}
    <div class="container">
        {{-- Coluna --}}
        <div class="row">
            {{-- Executando uma ação para cada raridade --}}
            @foreach ($collection_days as $collection_day)
                <div class="col-md-4 mb-5">
                    {{-- Transformando o card em um link --}}
                    <a href="{{ route('collection_Days.show', ['collection_Day' => $collection_day]) }}"
                        class="text-decoration-none">
                        <div class="card text-center">
                            {{-- Título do card --}}
                            <div class="card-header text-center"><strong>You've got {{ count($collection_day->fruits) }}
                                    fruits! </strong></div>
                            {{-- Corpo do card --}}
                            <div class="card-body">
                                <h5 class="card-title">{{ $collection_day->date }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
