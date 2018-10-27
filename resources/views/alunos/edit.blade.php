@extends('layout.app')

@section('content')
    <div class="container">
        <h1>Editar Usuario: {{$usuario->name}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['usuarios.update',$usuario->id], 'method'=>'put'])!!}

    <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $usuario->nome, ['class'=>'form-control']) !!}
        </div>

        <!-- Cpf Form Input -->
        <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', $usuario->cpf, ['class'=>'form-control']) !!}
        </div>

        <!-- Endereco Form Input -->
        <div class="form-group">
            {!! Form::label('endereco', 'Endereco:') !!}
            {!! Form::text('endereco', $usuario->endereco, ['class'=>'form-control']) !!}
        </div>

        <!-- Telefone Form Input -->
        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', $usuario->telefone, ['class'=>'form-control']) !!}
        </div>

        <!-- Tipo Usuario Form Input -->
        <div class="form-group">
            {!! Form::label('tipoUsuario', 'TipoUsuario:') !!}
            {!! Form::text('tipoUsuario', $usuario->tipoUsuario, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Novo', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection