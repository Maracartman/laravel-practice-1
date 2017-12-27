@extends('admin/template/main')

@section('title','Editar categoría '.$category->name)

@section('content')
    {!! Form::open(['route'=>['categories.update',$category->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$category->name,['class'=>'form-control',
        'required','placeholder'=>'Nombre categoría']) !!}
    </div>

    <div class="form-group center-block">

        <input class="btn btn-primary" value="Editar" type="submit"
               onclick="return confirm('¿Seguro que desea modificar?')">
    </div>
    {!! Form::close() !!}
@endsection