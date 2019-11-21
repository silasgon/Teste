@extends('layouts.principal')

@section('titulo', 'Opcoes')

@section('conteudo')
    
    <div class="options">
        <ul>
        <li><a class="success {{ request()->routeIs('opcoes/1') ? 'selected' : '' }}" href="{{ route('opcoes',1)}}">Success</a></li>
            <li><a class="info {{ request()->routeIs('opcoes.2') ? 'active' : '' }}" href="{{ route('opcoes',2)}}">Info</a></li>
            <li><a class="warning {{ request()->routeIs('opcoes/3') ? 'selected' : '' }}" href="{{ route('opcoes',3)}}">Warning</a></li>
            <li><a class="error {{ request()->routeIs('opcoes/4') ? 'selected' : '' }}" href="{{ route('opcoes',4)}}">Error</a></li>
    
        </ul>
    </div>
@if (isset($opcao))
    @switch($opcao)
        @case(1)
            @alerta(['titulo'=>'Sucesso Total', 'tipo'=>'success'])
                <p><strong>Não houve Erro inesperado</strong></p>
                <p>Não ocorreu um erro inesperado</p>
            @endalerta
            @break
        @case(2)
            @alerta(['titulo'=>'Informação Geral', 'tipo'=>'info'])
                <p><strong>Evite Erro inesperado</strong></p>
                <p>Pode ocorrer um erro inesperado</p>
            @endalerta
            @break
        @case(3)
            @alerta(['titulo'=>'Alerta', 'tipo'=>'warning'])
                <p><strong>Cuidado com o erro inesperado</strong></p>
                <p>Vai ocorrer um erro inesperado</p>
            @endalerta
            @break
        @case(4)
            @alerta(['titulo'=>'Erro Fatal', 'tipo'=>'error'])
                <p><strong>Erro inesperado</strong></p>
                <p>Ocorreu um erro inesperado</p>
            @endalerta
            @break
             
    @endswitch
@endif
@endsection