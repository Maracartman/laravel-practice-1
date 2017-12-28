@extends('admin/template/main')

@section('title','Crear artículo')

{{--{{dd($users)}}--}}

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


    {!! Form::open(['route'=>'articles.store','method'=>'POST','files'=>true]) !!}
    <div class="form-group">
        {!! Form::label('title','Título') !!}
        {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'Título']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('category','Categoría') !!}
        {!! Form::select('category_id',$categories,
        null,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('content','Contenido') !!}
        {!! Form::textarea('content',null,['class'=>'form-control','placeholder'=>'Contenido...']) !!}
    </div>

    {{--<div class="form-group">
        {!! Form::label('user','Usuario') !!}
        {!! Form::select('user_id',$users,
        null,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required']) !!}
    </div>--}}

    <div class="form-group">
        {!! Form::label('tags','Tags') !!}
        {!! Form::select('tags[]',$tags,
        null,['class'=>'form-control','multiple','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('image','Imagen') !!}
        {!! Form::file('image') !!}
    </div>




    <div class="form-group center-block">

        {!! Form::submit('Registrar',['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@endsection