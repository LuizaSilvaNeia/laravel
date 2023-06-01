@extends('layouts.base')

@section('content')
    <h1>Usuários</h1>
    <p>
        {{$usuarios->links()}}
        {{--  --}}
    </p>
    <table class="table table-border table-striped">
        <thead>
            <tr>
                <th> Ações </th>
                <th> Nome </th>
                <th> E-mail </th>
                <th> Criado em </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
                <tr>
                <td>
                    <a class="btn btn-outline-success"
                        href="{{route('usuario.show',['id'=>$usuario->id])}}">
                        Ver
                    </a>
                </td>
                <td>{{$usuario->name}}</td>
                <td>{{$usuario->email}}</td>
                <td>{{$usuario->created_at->format('d/m/Y')}}</td>
            </tr>
            @endforeach

        </tbody>
    </table>

@endsection
