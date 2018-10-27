@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Usuario</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'usuarios.store']) !!}

    <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Cpf Form Input -->
        <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', null, ['class'=>'form-control']) !!}
        </div>

        <!-- endereco Form Input -->
        <div class="form-group">
            {!! Form::label('endereco', 'Endereco:') !!}
            {!! Form::text('endereco', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Telefone Form Input -->
        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Tipo Usuario Form Input -->
        <div class="form-group">
            {!! Form::label('tipoUsuario', 'TipoUsuario:') !!}
            {!! Form::text('tipoUsuario', null, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::submit('Criar Usuario', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection
