@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Usuario: {{$user->name}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['users.update',$user->id], 'method'=>'put'])!!}

    <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('name', $user->name, ['class'=>'form-control']) !!}
        </div>

        <!-- Cpf Form Input -->
        <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', $user->cpf, ['class'=>'form-control']) !!}
        </div>

        <!-- Email Form Input -->
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', $user->email, ['class'=>'form-control']) !!}
        </div>

        <!-- Endereco Form Input -->
        <div class="form-group">
            {!! Form::label('endereco', 'Endereco:') !!}
            {!! Form::text('endereco', $user->endereco, ['class'=>'form-control']) !!}
        </div>

        <!-- Telefone Form Input -->
        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', $user->telefone, ['class'=>'form-control']) !!}
        </div>

        <!-- Tipo Usuario Form Input -->
        {{--<div class="form-group">--}}
            {{--{!! Form::label('tipoUser', 'TipoUser:') !!}--}}
            {{--{!! Form::text('tipoUser', $user->tipoUser, ['class'=>'form-control']) !!}--}}
        {{--</div>--}}

        <div class="form-group">
            <label for="">tipo de Usuario</label>
            <select type="text" name="regra" tipoUser="inputtipoUser" class="form-control">

                <option {{$user->tipoUser === 'Atendente' ? 'selected' : ''}}value="Atendente">Atendente</option>
                <option {{$user->tipoUser === 'Professor' ? 'selected' : ''}}value="Professor">Professor</option>
                @is('Admin')
                <option {{$user->tipoUser === 'Coordenador' ? 'selected' : ''}}value="Coordenador">Coordenador</option>
                <option {{$user->tipoUser === 'Admin' ? 'selected' : ''}}value="Admin">Admin</option>
                @endis
            </select>
        </div>
        {{--{{$user->tipoUser}}--}}
        <!-- Creche Form Input -->
        <div class="form-group">
            <label for="">id da Creche</label>
            <select name="creche_id" id="inputcreche_id" class="form-control">
                @foreach($creches as $cr)
                    <option value="{{$cr['id']}}">{{$cr['nome']}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Novo', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection