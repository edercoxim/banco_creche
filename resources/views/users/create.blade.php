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

        {!! Form::open(['route'=>'users.store']) !!}

    <!-- Nome Form Input -->
        <div class="form-group">
<<<<<<< HEAD
            {!! Form::label('name', 'Nome:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
=======
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        </div>

        <!-- Cpf Form Input -->
        <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', null, ['class'=>'form-control']) !!}
        </div>

<<<<<<< HEAD
        <!-- Cpf Form Input -->
        <div class="form-group">
            {!! Form::label('passoword', 'Password:') !!}
            {!! Form::text('password', null, ['class'=>'form-control']) !!}
        </div>

=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        <!-- endereco Form Input -->
        <div class="form-group">
            {!! Form::label('endereco', 'Endereco:') !!}
            {!! Form::text('endereco', null, ['class'=>'form-control']) !!}
        </div>

<<<<<<< HEAD
        <!-- email Form Input -->
        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::text('email', null, ['class'=>'form-control']) !!}
        </div>

=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        <!-- Telefone Form Input -->
        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Tipo de Usuario Form Input -->
<<<<<<< HEAD
        <div class="form-group">
            <label for="">tipo de Usuario</label>
            <select type="text" name="regra" tipoUser="inputtipoUser" class="form-control">
                <option ></option>
                <option value="Atendente">Atendente</option>
                <option value="Professor">Professor</option>
                @is('Admin')
                <option value="Coordenador">Coordenador</option>
                <option value="Admin">Admin</option>
                @endis
            </select>
        </div>

=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce


        <!-- Creche Form Input -->
        <div class="form-group">
            <label for="">id da Creche</label>
            <select name="creche_id" id="inputcreche_id" class="form-control">
                @foreach($creches as $cr)
                    <option value="{{$cr['id']}}">{{$cr['nome']}}</option>
                @endforeach

            </select>
        </div>


<<<<<<< HEAD


=======
>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
       <button type="submit" class="btn btn-primary">Salvar Usuario</button>


        {!! Form::close() !!}


    </div>

@endsection
