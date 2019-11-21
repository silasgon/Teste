@extends('layouts.principal')

@section('titulo', 'Departamentos')

@section('conteudo')

<h3>Departamentos</h3>

<ul>
    <li>Computadores</li>
    <li>Eletrônicos</li>
    <li>Acessórios</li>
    <li>Roupas</li>
</ul>

@component('components.alerta', ['titulo'=>'Sucesso Total', 'tipo'=>'success'])
   <p><strong>Não houve Erro inesperado</strong></p>
   <p>Não ocorreu um erro inesperado</p>
@endcomponent
@component('components.alerta', ['titulo'=>'Informação Geral', 'tipo'=>'info'])
   <p><strong>Evite Erro inesperado</strong></p>
   <p>Pode ocorrer um erro inesperado</p>
@endcomponent
@component('components.alerta', ['titulo'=>'Alerta', 'tipo'=>'warning'])
   <p><strong>Cuidado com o erro inesperado</strong></p>
   <p>Vai ocorrer um erro inesperado</p>
@endcomponent
@component('components.alerta', ['titulo'=>'Erro Fatal', 'tipo'=>'error'])
   <p><strong>Erro inesperado</strong></p>
   <p>Ocorreu um erro inesperado</p>
@endcomponent

@endsection