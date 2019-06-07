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

        <!-- Tipo de Usuario Form Input -->
        <div class="form-group">
            <label for="">tipo de Usuario</label>
            <select type="text" name="tipoUsuario" tipoUsuario="inputtipoUsuario" class="form-control">
                <option ></option>
                <option value="Atendente">Atendente</option>
                <option value="Professor">Professor</option>
                <option value="Coordenador">Coordenador</option>
            </select>
        </div>

        <!-- Creche Form Input -->
        <div class="form-group">
            <label for="">id da Creche</label>
            <select name="creche_id" id="inputcreche_id" class="form-control">
                @foreach($creches as $cr)
                    <option value="{{$cr['id']}}">{{$cr['nome']}}</option>
                @endforeach

            </select>
        </div>


       <button type="submit" class="btn btn-primary">Salvar Usuario</button>


        {!! Form::close() !!}


    </div>

@endsection
