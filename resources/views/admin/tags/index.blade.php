@extends('admin/template/main')

@section('title','Tags')

@section('content')
    <a href="{{route('tags.create')}}" class="btn btn-info">Crear nuevo tag</a>

    {!! Form::open(['route'=>'tags.index','method'=>'GET','class'=>'navbar-form pull-right'] ) !!}
        <div class="input-group">
            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar tag...']) !!}
            <span class="input-group-addon" id="search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></span>
        </div>

    {!! Form::close() !!}

    <table class="table-table-stripped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha creación</th>
            <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tags as $tag)
            <tr>
                <td>{{$tag->name}}</td>
                <td>{{$tag->created_at->format('d/m/Y')}}</td>
                <td>
                    <a href="{{route('tags.edit',$tag->id)}}" class="btn btn-danger"><span
                                class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="{{route('tags.destroy',$tag->id)}}" class="btn btn-warning"
                       onclick="return confirm('¿Seguro que desea eliminar?')"><span class="glyphicon glyphicon-trash"
                                                                                     aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $tags->render() !!}
@endsection