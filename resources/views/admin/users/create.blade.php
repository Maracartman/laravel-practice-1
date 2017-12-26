@extends('admin/template/main')

@section('title','Crear Usuario')

@section('content')
    {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class'=>'form-control',
        'required','placeholder'=>'Nombre completo']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Correo Electrónico') !!}
        {!! Form::text('email',null,['class'=>'form-control',
        'required','placeholder'=>'prueba@mail.com']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password','Contraseña') !!}
        {!! Form::password('password',['class'=>'form-control',
        'required','placeholder'=>'Contraseña']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type','Tipo') !!}
        {!! Form::select('type',[''=>'Seleccione.','member'=>'Miembro','admin'=>'Administrador'],
        null,['class'=>'form-control']) !!}
    </div>

    <div class="form-group">

        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>

    {!! Form::close() !!}
@endsection