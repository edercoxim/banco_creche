@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Sala: {{$sala->name}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['salas.update',$sala->id], 'method'=>'put'])!!}

    <!-- Ano Form Input -->
        <div class="form-group">
            {!! Form::label('ano', 'Ano:') !!}
            {!! Form::text('ano', $sala->ano, ['class'=>'form-control']) !!}
        </div>

        <!-- Turma Form Input -->
        <div class="form-group">
            {!! Form::label('turma', 'Nome da Turma:') !!}
            {!! Form::text('turma', $sala->turma, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Novo', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection