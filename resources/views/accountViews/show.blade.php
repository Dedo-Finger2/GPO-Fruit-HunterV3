
{{-- Pegando o layout da página --}}
@extends('layouts.page')

{{-- Título da página --}}
@section('title', 'Account details')
{{-- Indica qual parte da navbar o usuário se encontra no momento --}}
@section('account', 'active')

{{-- Conteúdo da página --}}
@section('content')

    <h1>Detalhes da conta</h1>
    <hr>

@endsection
