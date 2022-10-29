@extends('adminlte::page')

@section('title', 'Credimaster Web')

@section('content_header')
    <div class="alert alert-primary">
        <h1>Lista de permisos</h1>
    </div>
    <a href="permissions/create" class="btn btn-primary mb-3 fa-solid fa-circle-plus">Crear permiso</a>   
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <table class="table table-striped" id ="clientes">
            <thead class="bg-primary text_white">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    
                    <th colspan="2"></th>
                </tr>
            </thead> 
            <tbody>
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{$permission->id}}</td>
                        <td>{{$permission->name}}</td>
                        <td>{{$permission->description}}</td>
                        <td width="10px">
                            <a href="/permissions/{{$permission->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
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
<script>
   
</script>

@stop