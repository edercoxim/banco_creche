@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Nova Matricula</h1>

        {!! Form::open(['route'=>'matriculas.store']) !!}

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <div class="form-group">
            <label for="">Data Matricula</label>
            <input type="date" class="form-control" name="dataMatric" placeholder="Escreva o titulo"
            value="{{ old('') }}">
        </div>


        <!-- Matricular com id do Aluno  -->
        <div class="form-group">
            {!! Form::label('id', 'Id Aluno:') !!}
            {{--{!! Form::integer('id', $al['id'], ['class'=>'form-control']) !!}--}}
            <input type="text" class="form-control" name="aluno_id" value="{{$id}}">
        </div>


        <div class="form-group">
            <label for="">id da Sala</label>
            <select name="sala_id" id="inputSala_id" class="form-control">
                @foreach($salas as $sl)
                    <option value="{{$sl['id']}}">{{$sl['ano']}}</option>
                @endforeach

            </select>
        </div>

        <button type="submit" class="btn btn-primary">Salvar</button>
        {!! Form::close() !!}


    </div>

@endsection
