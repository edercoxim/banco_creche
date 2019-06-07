@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Creches de Coxim</h1>

    {{--<a href="{{route('creches.create')}}" class="btn btn-danger">Nova Creche</a>--}}

    {{--<a href="{{route('usuarios.create')}}" class="btn btn-danger">Novo Usuário</a>--}}
    <br />
    <br />
    <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Diretor</th>
                <th>Endereço</th>
                @is('Admin')
                <th>Açao</th>
                <th>Açao</th>
                @endis
            </tr>
            </thead>
            <tbody>

         <?php foreach( $creches	as	$c): ?>
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->diretor }}</td>
                <td>{{ $c->endereco }}</td>
                @is('Admin')
                <td><a href="{{route('creches.edit',['id'=>$c->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('creches.destroy',['id'=>$c->id])}}" class="btn-sm btn-danger">Remover</a> </td>
                @endis
            </tr>


       <?php endforeach      ?>

    </table>
</div>
@endsection
