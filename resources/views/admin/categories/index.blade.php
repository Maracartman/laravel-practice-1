@extends('admin/template/main')

@section('title','Categorías')

@section('content')
<a href="{{route('categories.create')}}" class="btn btn-info">Crear nueva categoría</a>
    <table class="table-table-stripped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Fecha creación</th>
            <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$category->name}}</td>
                <td>{{$category->created_at->format('d/m/Y')}}</td>
                <td>
                    <a href="{{route('categories.edit',$category->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="{{route('categories.destroy',$category->id)}}" class="btn btn-warning"
                    onclick="return confirm('¿Seguro que desea eliminar?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $categories->render() !!}
@endsection