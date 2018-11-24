@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sala</h1>
        <a href="{{route('creches')}}" class="btn btn-danger">Voltar Lista Creches</a>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Professor</th>
                <th>Ano</th>
                <th>Nome da Turma</th>
                <th>Açao</th>
                <th>Açao</th>
                <th>Chamada</th>

            </tr>
            </thead>
            <tbody>

            <?php foreach( $salas	as	$sl): ?>

            <tr>
                <td>{{ $sl->id }}</td>
                <td>{{ $sl->user->name }}</td>
                <td>{{ $sl->ano }}</td>
                <td>{{ $sl->turma }}</td>
                <td><a href="{{route('salas.edit',['id'=>$sl->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('salas.destroy',['id'=>$sl->id])}}" class="btn-sm btn-danger">Remover</a> </td>
                {{--<td><a href="{{route('chamadas/{sala_id}',['id'=>$sl->id])}}" class="btn-sm btn-danger">Fazer Chamada</a> </td>--}}

            </tr>

            <?php endforeach      ?>


        </table>
    </div>
@endsection