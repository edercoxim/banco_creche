@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Aluno: {{$aluno->name}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['alunos.update',$aluno->id], 'method'=>'put'])!!}

    <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $aluno->nome, ['class'=>'form-control']) !!}
        </div>

        <!-- Data Nascimento Form Input -->
        <div class="form-group">
            {!! Form::label('dataNasc', 'DataNasc:') !!}
            {!! Form::text('dataNasc', $aluno->dataNasc, ['class'=>'form-control']) !!}
        </div>

        <!-- Mae Form Input -->
        <div class="form-group">
            {!! Form::label('mae', 'Mae:') !!}
            {!! Form::text('mae', $aluno->mae, ['class'=>'form-control']) !!}
        </div>

        <!-- Pai Form Input -->
        <div class="form-group">
            {!! Form::label('pai', 'Pai:') !!}
            {!! Form::text('pai', $aluno->pai, ['class'=>'form-control']) !!}
        </div>

        <!-- Telefone Form Input -->
        <div class="form-group">
            {!! Form::label('telResponsavel', 'TelResponsavel:') !!}
            {!! Form::text('telResponsavel', $aluno->telResponsavel, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Novo', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection