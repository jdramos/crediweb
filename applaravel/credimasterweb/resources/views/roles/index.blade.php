@extends('adminlte::page')

@section('title', 'Credimaster Web')

@section('content_header')

    <h1>Listado de Roles</h1> 
    
      <a href="roles/create" class="btn btn-primary mb-3 fa-solid fa-circle-plus">Nuevo Rol</a>   
      
@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <table class="table table-striped" id ="clientes">
                <thead class="bg-primary text_white">
                    <tr>
                        <th>ID</th>
                        <th>Rol</th>
                        <th>Permisos</th>
                        <th colspan="2"></th>
                    </tr>
                </thead> 
                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <td>{{$role->id}}</td>
                            <td>{{$role->name}}</td>                    
                            <td>
                                @forelse ($role->permissions as $permission)
                                    <span class ="badge bg-primary">{{$permission->description}}</span>
                                @empty
                                    <span class ="badge bg-secondary">No se ha asigando permisos</span>
                                @endforelse
                            </td>
                            <td width="10px">
                                <a href="{{route('roles.edit', $role->id)}}" class="btn btn-sm btn-primary">Editar</a>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>      
            </table>
        </div>
    </div>
    

@stop

@section('css')
    
    
@stop

@section('js')

@stop
