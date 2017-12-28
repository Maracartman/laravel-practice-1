@extends('admin/template/main')

@section('title','Editar artículo '.$article->title)

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


    {!! Form::open(['route'=>['articles.update',$article->id],'method'=>'PUT']) !!}
    <div class="form-group">
        {!! Form::label('name','Título') !!}
        {!! Form::text('title',$article->title,['class'=>'form-control','placeholder'=>'Título']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('name','Contenido') !!}
        {!! Form::text('content',$article->content,['class'=>'form-control','placeholder'=>'Contenido']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('user','Usuario') !!}
        {!! Form::select('user_id',$users,
        $article->user_id,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('category','Categoría') !!}
        {!! Form::select('category_id',$categories,
        $article->category_id,['class'=>'form-control','placeholder'=>'Seleccione una opción...','required']) !!}
    </div>


    <div class="form-group center-block">

        <input class="btn btn-primary" value="Editar" type="submit"
               onclick="return confirm('¿Seguro que desea modificar?')">
    </div>
    {!! Form::close() !!}
@endsection