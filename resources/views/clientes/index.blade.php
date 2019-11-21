@extends('layouts.principal')

@section('titulo', 'Clientes')
    
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
        
        <hr>

        @for ($i = 0; $i < 10; $i++)
            {{ $i }},
        @endfor
        <br>
      
        @for ($i = 0; $i < count($clientes); $i++)
            {{ $clientes[$i]['nome'] }},
        @endfor
        <br>

        @foreach ($clientes as $c)
            <p>
                {{ $c['nome'] }} |
                @if ($loop->first)
                    (primeiro) |
                @endif
                @if ($loop->last)
                    (Ultimo) |
                @endif

                ({{ $loop->index}}) - {{ $loop->iteration }} / {{ $loop->count}}
            </p>
        @endforeach


        @foreach ($clientes as $c)
            
        @endforeach


    @else
    <h4>Não existem usuários cadastrados.</h4>
    @endif

@endsection