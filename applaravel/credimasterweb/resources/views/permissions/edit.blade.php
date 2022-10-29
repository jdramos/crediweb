@extends('adminlte::page')

@section('title', 'Editar permisos')

@section('content_header')
<div class="alert alert-primary">
        <h1>Editar permisos</h1>
    </div>
@stop

@section('content')

<div class="card">
  <div class="card-body">
    <form id="formulario-guardar" action="{{route('permissions.update', $permission->id)}}" method="post" >
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label for="nomSuc" class="form-label">Nombre permiso</label>
        <input type="text" class="form-control" id="nombre" name="name" value="{{$permission->name}}" required>
      </div>
      <div class="mb-3">
        <label for="dirSuc" class="form-label">Descripcion permiso</label>
        <input type="text" class="form-control" name="description" value="{{$permission->description}}" required>
      </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/permissions" class="btn btn-secondary" tabindex="5">Cancelar</a>
    </form>
  </div>
</div>
@stop

@section('js')

    <script>
      $('#formulario-guardar').submit(function(e){
        e.preventDefault();
        Swal.fire({
          title: '¿Confirma guardar el registro?',
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
                'El registro ha sido editado',
                'success'
              )
              this.submit();
            }
          })       
        });
    </script>
@stop

