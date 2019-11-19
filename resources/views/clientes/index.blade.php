@extends('layouts.principal')

@section('conteudo')
        

    <h3>{{$titulo}}</h3>
    <a href="{{ route('cliente.create')}}">Novo Cliente</a>

    @if (count($clientes)>0)
        
        <ul>
            @foreach ($clientes as $c)
                <li>
                    {{ $c['id'] }} | {{ $c['nome'] }} |
                <a href="{{ route('cliente.edit', $c['id'] )}}">Editar | </a>
                <a href="{{ route('cliente.show', $c['id'] )}}">Info</a>

                <form action="{{ route('cliente.destroy', $c['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Apagar">
                    </form>
                </li>
            @endforeach
        </ul>
    @else
    <h4>Não existem usuários cadastrados.</h4>
    @endif

@endsection