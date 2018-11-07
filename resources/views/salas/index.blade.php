@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Sala</h1>

        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Professor</th>
                <th>Ano</th>
                <th>Açao</th>
                <th>Açao</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach( $salas	as	$sl): ?>
            <?php foreach( $usuarios	as	$us): ?>
            <tr>
                <td>{{ $sl->id }}</td>
                <td>{{ $us->nome }}</td>
                <td>{{ $sl->ano }}</td>
                <td><a href="{{route('salas.edit',['id'=>$sl->id])}}" class="btn-sm btn-success">Editar</a> </td>
                <td><a href="{{route('salas.destroy',['id'=>$sl->id])}}" class="btn-sm btn-danger">Remover</a> </td>
            </tr>

            <?php endforeach      ?>
            <?php endforeach      ?>

        </table>
    </div>
@endsection