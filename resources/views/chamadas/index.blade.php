@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <button id="chamada" class="btn btn-success pull-right">Salvar Chamada</button>
            </div>


            <div class="col-lg-4">
                <label>Selecione a Data</label>
                <input type="date" id="dia"  onclick="matricula({{$alunos}})" class="form-control">
            </div>


        </div>

        <div class="row">
            <div class="col-lg-12">
                <h1>Alunos</h1>
                <table class="table">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Presença</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php foreach( $alunos	as	$al): ?>
                    <tr>
                        <td>{{ $al->id }}</td>
                        <td>{{ $al->aluno->nome }}</td>
                        <td><input type="checkbox" onclick="chamada({{$al->id}})"></td>
                    </tr>

                    <?php endforeach      ?>

                </table>

            </div>
        </div>

    </div>
@endsection