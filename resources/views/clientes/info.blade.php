@extends('layouts.principal')

@section('titulo', 'Clientes Detalhes')

@section('conteudo')

<h3>Informações do Cliente</h3>

<p>ID: {{ $cliente['id']}}</p>
<p>Nome: {{ $cliente['nome']}}</p>
<br>


<a href="{{route('cliente.index')}}">Voltar</a>
@endsection