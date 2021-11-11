@extends('layout.main')

@section('content')
    <h3> {{$title }} </h3>
    <h4><a href="{{route('marcas.create')}}">Novo Cliente</a></h4>

    @if( count($brands) > 0 )
        <ul>
            @foreach($brands as $brand)
                <li>
                    {{$brand['id']." . ".$brand['name'] }} |
                    <a href="{{route('marcas.edit', $brand['id'])}}">Editar</a> |
                    <a href="{{route('marcas.show', $brand['id'])}}">Ver</a> |
                    <form action="{{route('marcas.destroy', $brand['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <h4> Não existem registros</h4>
    @endif
@endsection
