
@extends('layouts.principal')

@section('titulo', 'Clientes - Novo')

@section('conteudo')

<h3>novo Cliente</h3>

<form action="{{ route('cliente.store')}}" method="POST">
    @csrf
    <input type="text" name="nome">
    <input type="submit" name="Salvar">
</form>


@endsection