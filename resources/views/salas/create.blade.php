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

    <!-- Usuario Form Input -->
        <div class="form-group">
            <label for="">id do Usuario</label>
            <select name="user_id" id="inputuser_id" class="form-control">
                @foreach($users as $us)
                    <option value="{{$us['id']}}">{{$us['nome']}}</option>
                @endforeach

            </select>
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Sala', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection
