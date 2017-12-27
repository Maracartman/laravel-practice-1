@extends('admin/template/main')

@section('title','Editar usuario '.$user->name)

@section('content')
    {!! Form::open(['route'=>['users.update',$user->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$user->name,['class'=>'form-control',
        'required','placeholder'=>'Nombre completo']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email','Correo Electrónico') !!}
        {!! Form::text('email',$user->email,['class'=>'form-control',
        'required','placeholder'=>'prueba@mail.com']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('type','Tipo') !!}
        {!! Form::select('type',[''=>'Seleccione','member'=>
        'Miembro','admin'=>'Administrador'
        ],
        $user->type,['class'=>'form-control']) !!}
    </div>

    <div class="form-group center-block">

        <input class="btn btn-primary" value="Editar" type="submit"
               onclick="return confirm('¿Seguro que desea modificar?')">
    </div>
    {!! Form::close() !!}
@endsection