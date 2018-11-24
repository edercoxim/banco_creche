@extends('layouts.app')

@section('content')

        <h1>Pesquisa de Alunos</h1>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>DataNasc</th>
                <th>Mae</th>
                <th>Pai</th>
                <th>Tel_Resp</th>
                <th>Nome da Turma</th>
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
                <td>{{ $al->telResponsavel }}</td>
                @if(sizeof($al->matricula) > 0 )
                @foreach($al->matricula as $matric)
                <td>{{$matric->sala->turma }} </td>
                @endforeach
                @else
                <td>Nao matriculado</td>
                @endif
                <td><a href="{{route('alunos.edit',['id'=>$al->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('alunos.destroy',['id'=>$al->id])}}" class="btn-sm btn-danger">Remover</a> </td>
                <td><a href="{{route('matriculas.create',['id'=>$al->id])}}" class="btn btn-danger">matricular </a> </td>

            </tr>

            <?php endforeach      ?>

        </table>

@endsection