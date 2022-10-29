@extends('adminlte::page')

@section('title', 'Credimaster Web')

@section('content_header')

<h1>Crear Roles</h1>

@stop

@section('content')

<div>
  <div class="card">
    <div class="card-body">
      <form action="/roles" method="POST" id="formulario-guardar">
        @csrf
        @method('POST')
        <div class="form-group">
          <label for="">Nombre</label>
          <input type="text" class="form-control" placeholder="Ingrese el nombre del rol " name="name" required></input>
        </div>
        <h2>Lista de permisos</h2>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label>Rol</label>
            @foreach ($permissions as $permission)
            <div>
              <label>
                <input class="mr-1" type="checkbox" name="permissions[]" value="{{$permission->id}}">
                {{$permission->description}}
              </label>
            </div>
            @endforeach
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
    </div>
  </div>
</div>

@stop

@section('css')


@stop

@section('js')
<script>
  $('#formulario-guardar').submit(function(e) {
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
          'El registro ha sido guardado',
          'success'
        )
        this.submit();
      }
    })
  });
</script>

@stop