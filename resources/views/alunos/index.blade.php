@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Alunos</h1>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>DataNasc</th>
                <th>Mae</th>
                <th>Pai</th>
                <th>TelResponsavel</th>
                <th>Açao</th>
                <th>Açao</th>
                <th>Matricular</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach( $alunos	as	$al): ?>
            <tr>
                <td>{{ $al->id }}</td>
                <td>{{ $al->nome }}</td>
                <td>{{ $al->dataNasc }}</td>
                <td>{{ $al->mae }}</td>
                <td>{{ $al->pai}}</td>
                <td>{{ $al->telResponsavel}}</td>
                <td><a href="{{route('alunos.edit',['id'=>$al->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('alunos.destroy',['id'=>$al->id])}}" class="btn-sm btn-danger">Remover</a> </td>
                <td><a href="{{route('matriculas.create',['id'=>$al->id])}}" class="btn btn-danger">Matricular</a> </td>
            </tr>

            <?php endforeach      ?>

        </table>
    {!! $alunos->links() !!}

    </div>
@endsection