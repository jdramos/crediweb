@extends('adminlte::page')

@section('title', 'Credimaster Web')

@section('content_header')
    <div class="alert alert-primary">
        <h1>Editar Usuario</h1>
    </div>
@stop

@section('content')

<form action="{{route ('users.update', $user)}}" method="POST" id="formulario-editar">
    @method('PUT')
    @csrf
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre</p>
            <input type="text" name = "name" class="form-control" value ="{{$user->name}}" >
            <p class="h5">Correo electrónico</p>
            <input type="text" name = "email" class="form-control" value ="{{$user->email}}" >
            <h5>Listado de roles</h5>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Rol</label>
                    @foreach($roles as $rol)
                        <div>
                            <label>
                                <input class="mr-1" type="checkbox" name="roles[]" value="{{$rol->id}}"
                                {{$user->roles->contains($rol->id) ? "checked" : ""}}>
                                {{$rol->name}}
                            </label>
                        </div>
                    @endforeach          
                </div>
            </div>
        </div>
    </div>
    <a href="/users" class="btn btn-secondary" tabindex="5">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
</form>

@stop

@section('css')

@stop

@section('js')
<script>
      $('#formulario-editar').submit(function(e){
        e.preventDefault();
        Swal.fire({
          title: '¿Confirma editar el registro?',
          text: "",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Sí, guardar!'
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire(
                'Listo!',
                'El registro ha sido editado.',
                'success'
              )
              this.submit();
            }
          })       
        });

     $(document).ready(function() {
        $('.js-example-basic-single').select2({
            width: 'resolve',
            
        });
        
    });

    </script>

@stop