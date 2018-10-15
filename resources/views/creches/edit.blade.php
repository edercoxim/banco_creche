@extends('principal')

@section('content')
    <div class="container">
        <h1>Editar Creche: {{$creche->name}}</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>['creches.update',$creche->id], 'method'=>'put'])!!}

        <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', $creche->nome, ['class'=>'form-control']) !!}
        </div>

        <!-- Endereco Form Input -->
        <div class="form-group">
            {!! Form::label('endereco', 'Endereco:') !!}
            {!! Form::text('endereco', $creche->endereco, ['class'=>'form-control']) !!}
        </div>

        <!-- Bairro Form Input -->
        <div class="form-group">
            {!! Form::label('bairro', 'Bairro:') !!}
            {!! Form::text('bairro', $creche->bairro, ['class'=>'form-control']) !!}
        </div>

        <!-- Diretor Form Input -->
        <div class="form-group">
            {!! Form::label('diretor', 'Diretor:') !!}
            {!! Form::text('diretor', $creche->diretor, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Salvar Nova', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection