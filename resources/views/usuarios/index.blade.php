@extends('principal')

@section('content')
    <div class="container">
        <h1>Atendente</h1>

        <a href="{{route('atendentes.create')}}" class="btn btn-danger">Novo Atendente</a>

        <a href="{{route('creches')}}" class="btn btn-danger">Lista Creche</a>
        <br />
        <br />
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Cpf</th>
                <th>Telefone</th>
                <th>Açao</th>
                <th>Açao</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach( $atendentes	as	$at): ?>
            <tr>
                <td>{{ $at->id }}</td>
                <td>{{ $at->nome }}</td>
                <td>{{ $at->cpf }}</td>
                <td>{{ $at->telefone }}</td>
                <td><a href="{{route('atendentes.edit',['id'=>$at->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('atendentes.destroy',['id'=>$at->id])}}" class="btn-sm btn-danger">Remover</a> </td>
            </tr>

            <?php endforeach      ?>

        </table>
    </div>
@endsection