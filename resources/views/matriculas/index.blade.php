@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Matriculas</h1>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Aluno</th>
                <th>Sala</th>
                <th>Data</th>
                <th>Açao</th>
                <th>Açao</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach( $alunos	as	$al): ?>
            <?php foreach( $matriculas	as	$mat): ?>
            <?php foreach( $salas	as	$sl): ?>
            <tr>
                <td>{{ $mat->id }}</td>
                <td>{{ $al->nome }}</td>
                <td>{{ $sl->ano }}</td>
                <td>{{ $mat->dataMatric }}</td>
                <td><a href="{{route('matriculas.edit',['id'=>$mat->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('matriculas.destroy',['id'=>$mat->id])}}" class="btn-sm btn-danger">Remover</a> </td>
            </tr>

            <?php endforeach      ?>
            <?php endforeach      ?>
            <?php endforeach      ?>

        </table>

    </div>
@endsection