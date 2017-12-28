@extends('admin/template/main')

@section('title','Crear Usuario')

@section('content')
    @if(count($errors)>0)

        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>


    @endif


    {!! Form::open(['route'=>'users.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre completo']) !!}
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

    @guest
        @else
            <div class="form-group">
                {!! Form::label('type','Tipo') !!}
                {!! Form::select('type',['member'=>'Miembro','admin'=>'Administrador'],
                null,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required']) !!}
            </div>
            @endguest

            <div class="form-group center-block">

                {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
@endsection