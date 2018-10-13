@extends('principal')

@section('content')

    <h1>Lista de Creches de Coxim</h1>
    <table class="table">



            <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Diretor</th>
                <th>Endereço</th>
            </tr>
            </thead>
            <tbody>

         <?php foreach( $crechii	as	$c): ?>
            <tr>
                <td>{{ $c->id }}</td>
                <td>{{ $c->nome }}</td>
                <td>{{ $c->diretor }}</td>
                <td>{{ $c->endereco }}</td>
            </tr>

       <?php endforeach      ?>

    </table>
@endsection
