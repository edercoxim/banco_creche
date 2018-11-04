@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Matricula: {{$matricula->name}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['matriculas.update',$matricula->id], 'method'=>'put'])!!}

    <!-- Data Matricula Form Input -->
        <div class="form-group">
            {!! Form::label('dataMatric', 'DataMatric:') !!}
            {!! Form::date('dataMatric', $matricula->dataMatric, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Matricula', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection