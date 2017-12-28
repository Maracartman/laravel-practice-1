@extends('admin/template/main')

@section('title','Editar tag '.$tag->name)

@section('content')
    {!! Form::open(['route'=>['tags.update',$tag->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Nombre') !!}
        {!! Form::text('name',$tag->name,['class'=>'form-control',
        'required','placeholder'=>'Nombre del tag']) !!}
    </div>

    <div class="form-group center-block">

        <input class="btn btn-primary" value="Editar" type="submit"
               onclick="return confirm('¿Seguro que desea modificar?')">
    </div>
    {!! Form::close() !!}
@endsection