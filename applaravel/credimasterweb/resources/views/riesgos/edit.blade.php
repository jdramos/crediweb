@extends('adminlte::page')

@section('title', 'Editar riesgo')

@section('content_header')
    <h1>Editar Riesgo</h1>
@stop

@section('content')

<form action='/riesgos/{{$riesgo->id}}' id='formulario-guardar' method="POST">
  @csrf
  @method('PUT')
  
<div class="mb-3">
    <label for="nomSuc" class="form-label">Descripción riesgo</label>
    <input type="text" class="form-control" id="nomRiesgo" value = '{{$riesgo->descripcion}}' name="nomRiesgo" aria-describedby="emailHelp" required>
</div>

<div class="mb-3">
    <label for="nomSuc" class="form-label">Peso riesgo</label>
    <input type="number" class="form-control" id="nomSuc" name="pesoRiesgo" aria-describedby="emailHelp" required>
</div>


</div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
@stop

@section('js')
<script>
      $('#formulario-guardar').submit(function(e){
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
              this.submit();
              Swal.fire(
                'Listo!',
                'El registro ha sido guardado',
                'success'
              )
              
            }
          })       
        });
    </script>
    @stop


