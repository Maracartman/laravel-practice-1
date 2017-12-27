@extends('admin/template/main')

@section('title','Artículos')

@section('content')
<a href="{{route('articles.create')}}" class="btn btn-info">Crear nuevo artículo</a>
    <table class="table-table-stripped">
        <thead>
        <tr>
            <th scope="col">Título</th>
            <th scope="col">Contenido</th>
            <th scope="col">Usuario</th>
            <th scope="col">Categoría</th>
            <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{$article->title}}</td>
                <td>{{$article->content}}</td>
                <td>{{$article->user->name}}</td>
                <td>{{$article->category->name}}</td>
                <td>
                    <a href="{{route('articles.edit',$article->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="{{route('articles.destroy',$article->id)}}" class="btn btn-warning"
                    onclick="return confirm('¿Seguro que desea eliminar?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $articles->render() !!}
@endsection