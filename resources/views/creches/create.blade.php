@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Nova Creche</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'creches.store']) !!}

    <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Endereco Form Input -->
        <div class="form-group">
            {!! Form::label('endereco', 'Endereco:') !!}
            {!! Form::text('endereco', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Bairro Form Input -->
        <div class="form-group">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Diretor Form Input -->
        <div class="form-group">
            {!! Form::label('diretor', 'Diretor:') !!}
            {!! Form::text('diretor', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Creche', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection

