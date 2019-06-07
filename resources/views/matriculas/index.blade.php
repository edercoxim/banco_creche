@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Matriculas</h1>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Aluno</th>
<<<<<<< HEAD
                <th>Sala/Ano</th>
                <th>Turma</th>
                <th>Data/Mat.</th>
                <th>Creche</th>
                @is('Atendente')
=======
                <th>Sala</th>
                <th>Data</th>
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
                <th>Açao</th>
                <th>Açao</th>
                @endis
            </tr>
            </thead>
            <tbody>

<<<<<<< HEAD

            <?php foreach( $matriculas	as	$mat): ?>

            <tr>
                <td>{{ $mat->id }}</td>
                <td>{{ $mat->aluno['nome'] }}</td>
                <td>{{ $mat->sala->ano }}</td>
                <td>{{ $mat->sala->turma }}</td>
                <td>{{ $mat->dataMatric }}</td>
                <td>{{ $mat->creche['nome']}}</td>

                @is('Atendente')
                <td><a href="{{route('matriculas.edit',['id'=>$mat->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('matriculas.destroy',['id'=>$mat->id])}}" class="btn-sm btn-danger">Remover</a> </td>
                @endis
=======
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
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
            </tr>

            <?php endforeach      ?>
            <?php endforeach      ?>
            <?php endforeach      ?>


        </table>

    </div>
@endsection