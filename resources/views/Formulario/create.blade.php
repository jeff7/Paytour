@extends('welcome')

@section('content')
    <div class="container">
        <h1>Formulário Paytour</h1>   
        <br/>
        <br/>

        @if ($errors->any())
            <ul class="alert alert-warning">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url'=>'/store', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome:') !!}
            {!! Form::text('nome', null, ['class'=>'form-control input_area']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control input_area', 'type'=>'Email']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('telefone', 'Telefone:') !!}
            {!! Form::text('telefone', null, ['class'=>'form-control input_area']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('escolaridade', 'Escolaridade:') !!}
            {!! Form::select('escolaridade', ['Ensino Médio'=>'Ensino Médio', 'Ensino Superior' => 'Ensino Superior', 'Ensino Superior Incompleto' => 'Ensino Superior Incompleto'], 'Ensino Médio', ['class'=>'form-control input_area']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cargo_desejado', 'Cargo Desejado:') !!}
            {!! Form::textarea('cargo_desejado', null, ['class'=>'form-control input_area', 'rows'=>'3']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('observacao', 'Observações:') !!}
            {!! Form::textarea('observacao', null, ['class'=>'form-control input_area', 'rows'=>'3']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('arquivo', 'Arquivo:') !!}
            {!! Form::file('arquivo',  ['class'=>'form-control input_area']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Enviar', ['class'=>'btn btn-primary']) !!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection          