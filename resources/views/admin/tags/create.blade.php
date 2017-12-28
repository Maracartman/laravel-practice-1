@extends('admin/template/main')

@section('title','Crear Tag')

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


    {!! Form::open(['route'=>'tags.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Nombre del tag']) !!}
    </div>

    <div class="form-group center-block">

        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection