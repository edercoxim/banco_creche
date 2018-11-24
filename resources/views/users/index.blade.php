@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Usuario</h1>

        {{--<a href="{{route('users.create')}}" class="btn btn-danger">Novo Usuario</a>--}}

        {{--<a href="{{route('creches')}}" class="btn btn-danger">Lista Creche</a>--}}
        <br />
        <br />
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Endereco</th>
                <th>Telefone</th>
                <th>Tipo/Usuario</th>
                <th>Creche</th>
                <th>Açao</th>
                <th>Açao</th>
            </tr>
            </thead>
            <tbody>


            <?php foreach( $users	as	$us): ?>
            <tr>
                <td>{{ $us->id }}</td>
                <td>{{ $us->name }}</td>
                <td>{{ $us->cpf }}</td>
                <td>{{ $us->endereco}}</td>
                <td>{{ $us->telefone }}</td>
                <td>{{ $us->tipoUser }}</td>
                <td>{{ $us->creche['nome'] }}</td>
                <td><a href="{{route('users.edit',['id'=>$us->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('users.destroy',['id'=>$us->id])}}" class="btn-sm btn-danger">Remover</a> </td>
            </tr>


            <?php endforeach      ?>

        </table>
        {!! $users->links() !!}
    </div>
@endsection