@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Chamada</h1>
        <br />
        <br />
        <table class="table">
            <thead>
            <tr>
                <th>Data</th>
                <th>Nome</th>
                <th>Presenca</th>

            </tr>
            </thead>
            <tbody>

            <?php foreach( $presenca	as	$p): ?>

            <tr>
                <td>{{ $p->dia }}</td>
                <td>{{$p->matricula->aluno['nome']}} </td>
                <td>{{ $p->presenca }}</td>


            </tr>


            <?php endforeach      ?>

        </table>
    </div>
@endsection
