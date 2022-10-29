@extends('adminlte::page')

@section('title', 'Agregar Departamento')

@section('content_header')
    <h1>Agregar Departamento</h1>
@stop

@section('content')

<form action='/zonas' method='POST'>
  @csrf
  @method('POST')
<div class="mb-3">
    <label for="nomSuc" class="form-label">Nombre departamento</label>
    <input type="text" class="form-control" id="nomSuc" name = 'nomZona' aria-describedby="emailHelp">
  </div>

  <label for="nomSuc" class="form-label">Selecciones el riesgo</label>
  <div class="mb-3">
    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name='riesgo'>
      @foreach ($riesgos as $riesgo)
        <option value="{{$riesgo->id}}">{{$riesgo->descripcion}}</option>
      @endforeach
    </select>
</div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
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
                'El registro ha sido guardado',
                'success'
              )
              this.submit();
            }
          })       
        });
    </script>
    @stop


