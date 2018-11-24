@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Novo Aluno</h1>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route'=>'alunos.store']) !!}

    <!-- Nome Form Input -->
        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Data Nascimento Form Input -->
        <div class="form-group">
            {!! Form::label('dataNasc', 'DataNasc:') !!}
            {!! Form::date('dataNasc', null, ['class'=>'form-control']) !!}
        </div>

        <!-- mae Form Input -->
        <div class="form-group">
            {!! Form::label('mae', 'Mae:') !!}
            {!! Form::text('mae', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Pai Form Input -->
        <div class="form-group">
            {!! Form::label('pai', 'Pai:') !!}
            {!! Form::text('pai', null, ['class'=>'form-control']) !!}
        </div>

        <!-- Tel Responsavel Form Input -->
        <div class="form-group">
            {!! Form::label('telResponsavel', 'TelResponsavel:') !!}
            {!! Form::text('telResponsavel', null, ['class'=>'form-control']) !!}
        </div>

        {{--<div class="form-group">--}}
            {{--<label for="">id da Creche</label>--}}
            {{--<select name="creche_id" id="inputCreche_id" class="form-control">--}}
                {{--@foreach($creches as $cr)--}}
                    {{--<option value="{{$cr['id']}}">{{$cr['nome']}}</option>--}}
                {{--@endforeach--}}

            {{--</select>--}}
        {{--</div>--}}


        <div class="form-group">
            {!! Form::submit('Criar Aluno', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}



    </div>

@endsection
