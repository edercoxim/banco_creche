@extends('principal')

@section('content')
    <div class="container">
        <h1>Editar atendente: {{$atendente->name}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['atendentes.update',$atendente->id], 'method'=>'put'])!!}

    <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $atendente->nome, ['class'=>'form-control']) !!}
        </div>

        <!-- Cpf Form Input -->
        <div class="form-group">
            {!! Form::label('cpf', 'Cpf:') !!}
            {!! Form::text('cpf', $atendente->cpf, ['class'=>'form-control']) !!}
        </div>

        <!-- Telefone Form Input -->
        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', $atendente->telefone, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Novo', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection