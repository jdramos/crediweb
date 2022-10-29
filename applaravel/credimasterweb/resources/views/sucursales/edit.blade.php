@extends('adminlte::page')

@section('title', 'Editar sucursal')

@section('content_header')
    <h1>Editar Sucursal</h1>
@stop

@section('content')
<div class="card mb-3 center" style="max-width: 540px;">
<div class="card-body">
  <form action="/sucursales/{{$sucursal->id}}" method="POST" id='formulario-editar'>
      @csrf
      @method('PUT')
      
      <div class="form-row">
    <div class="col-md-2 mb-4">
        <label for="inputName">Siglas</label>
        <input type="text" class="form-control" id="inputName" required name="siglaSuc" value = '{{$sucursal->sigla}}'>
    </div>
  </div>
        <div class="form-row">
          <div class="form-group col-md-6">
              <label for="inputLastName">Nombre sucursal</label>
              <input type="text" class="form-control" id="inputLastName" required name="nomSuc" value = '{{$sucursal->nomsuc}}'>
          </div>
        </div>
        <div class="mb-3">
            <label for="dirSuc" class="form-label">Dirección</label>
            <textarea class="form-control" name="dirSuc" rows="3" value = '{{$sucursal->direccion}}'></textarea>
        </div>
        <div class="mb-3">
            <label for="telSuc" class="form-label">Telefono sucursal</label>
            <input type="text" class="form-control"  id="telSuc" name="telSuc" value = '{{$sucursal->direccion}}' aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
      <label for="idZona" class="form-label">Zona o Departamento</label>
      <select id= "idZona" name='zonaSuc' class="form-control form-control-sm" aria-label=".form-select-lg example" required>
      <option value="{{$sucursal->zonas->id}}">{{$sucursal->zonas->descripcion}}</option>
        @foreach($zonas as $zona)
          <option value="{{$zona->id}}">{{$zona->descripcion}}</option>
        @endforeach
      </select>
    </div>

    <div class="mb-3">
      <label for="idRiesgoSuc" class="form-label">Riesgo Sucursal</label>
      <select id="idRiesgoSuc" name='riesgoSuc' class="form-control form-control-sm" aria-label=".form-select-lg example" required>
        @foreach($tiporiesgos as $riesgo)
          
          <option value="{{$riesgo->id}}" {{$sucursal->riesgosuc == $riesgo->id ? "selected" : "" }} >{{$riesgo->descripcion}}</option>
        @endforeach
      </select>
    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="/sucursales" class="btn btn-secondary" tabindex="5">Cancelar</a>
    
  </form>
</div>
</div>
@stop

@section('js')

    
    <script>
      $('#formulario-editar').submit(function(e){
        e.preventDefault();
        Swal.fire({
          title: '¿Confirma guardar los cambios?',
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

