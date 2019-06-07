@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nova Sala</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'salas.store']) !!}

    <!-- Ano Form Input -->
        <div class="form-group">
            {!! Form::label('ano', 'Ano:') !!}
            {!! Form::text('ano', null, ['class'=>'form-control']) !!}
        </div>

<<<<<<< HEAD
        <!-- Turma Form Input -->
        <div class="form-group">
            {!! Form::label('turma', 'Nome da Turma:') !!}
            {!! Form::text('turma', null, ['class'=>'form-control']) !!}
        </div>

    <!-- Usuario Form Input -->
        <div class="form-group">
            <label for="">Professor(a)</label>
            <select name="user_id" id="inputuser_id" class="form-control">
                @foreach($users as $us)
                    <option value="{{$us['id']}}">{{$us['name']}}</option>
                @endforeach

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

=======
    <!-- Usuario Form Input -->
        <div class="form-group">
            <label for="">id do Usuario</label>
            <select name="user_id" id="inputuser_id" class="form-control">
                @foreach($users as $us)
                    <option value="{{$us['id']}}">{{$us['nome']}}</option>
                @endforeach

            </select>
        </div>

>>>>>>> ecd420b87383ebef89dc91064cd10d2a7b2649ce
        <div class="form-group">
            {!! Form::submit('Criar Sala', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection
