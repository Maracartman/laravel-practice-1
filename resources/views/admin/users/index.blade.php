@extends('admin/template/main')

@section('title','Usuarios')

@section('content')
<a href="{{route('users.create')}}" class="btn btn-info">Crear nuevo usuario</a>
    <table class="table-table-stripped">
        <thead>
        <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>@if($user->type =='admin')
                        <span class="label label-danger">{{$user->type}}</span>
                        @else
                        <span class="label label-primary">{{$user->type}}</span>
                    @endif

                </td>
                <td>
                    <a href="{{route('users.edit',$user->id)}}" class="btn btn-danger"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                    <a href="{{route('users.destroy',$user->id)}}" class="btn btn-warning"
                    onclick="return confirm('¿Seguro que desea eliminar?')"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $users->render() !!}
@endsection