@extends('adminlte::page')

@section('title', 'Detalle cliente')

@section('content_header')

    <h1 class="d-block p-2 bg-primary text-white">Detalle del Cliente 
        [{{$cliente->codCli}} - {{$cliente->nombres}} {{$cliente->apellidos}}]</h1>
    
@stop

@section('css')

@stop

@section('content')



<div class="container-xl">
        <h4 class="d-block p-2 bg-primary text-white">Información general</h1>
    </div>   
   
<div class="container-xl">
   

    <form action="/clientes/{{$cliente->idCli}}"  class="needs-validation" novalidate method="POST" >
        @csrf
        @method('PUT')
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="inputName">Nombres</label>
            <input type="text" class="form-control" id="inputName" requiered 
            value = "{{$cliente->nombres}}" disabled readonly>
            <div class="invalid-feedback">
                Please choose a username.
            </div>
        </div>

        <div class="form-group col-md-6">
            <label for="inputLastName">Apellidos</label>
            <input type="text" class="form-control" id="inputLastName" 
            value = "{{$cliente->apellidos}}" disabled readonly>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputIdentification">Identificacion</label>
            <input type="text" class="form-control" id="inputIdentification" 
            value = "{{$cliente->cedula}}" disabled readonly>
        </div>
        <div class="form-group col-md-2">
            <label for="inputProfesion">Prefesión/Oficio</label>
            <input type="text" class="form-control" id="inputProfesion"
             value = "{{$cliente->oficio}}" disabled readonly>
        </div>
        <div class="form-group col-md-2">
            <label for="inputTel">Telefono</label>
            <input type="text" class="form-control" id="inputTel" ç
            value = "{{$cliente->telefono}}" disabled readonly>
        </div>
        <div class="form-group col-md-1">
            <label for="inputEdad">Edad</label>
            <input type="text" class="form-control" id="inputEdad" 
            value = "{{$cliente->edad}}" disabled readonly>
        </div>
        <div class="form-group col-md-2">
            <label for="inputState">Género</label>
            <select id="inputState" class="form-control form-select notItemOne" disabled readonly>
                <option value="{{$cliente->sexo}}">{{$cliente->sexo}}</option>
                <option value="Masculino">Masculino</option>
                <option value="Femenino">Femenino</option>
                 
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputState">Estado civil</label>
            <select id="inputState" class="form-control" disabled readonly>
            <option value="{{$cliente->est_civil}}">{{$cliente->est_civil}}</option>
                <option>Soltero</option>
                <option>Casado</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputAddress">Dirección </label>
        <input type="text" class="form-control" id="inputAddress"
         placeholder="Domicilio donde habita"  value = "{{$cliente->domicilio}}"
         disabled readonly>
    </div>
    <div class="form-row">
  
        <div class="form-group col-md-4">
            <label for="inputComercio">Comercio</label>
            <select id="inputComercio" class="form-control" disabled readonly>
                @foreach ($comercios as $comercio)
                    <option value="{{$comercio->num}}">{{$comercio->descripcion}}</option>
                @endforeach          
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputComercio">Reportar al buró</label>
            <select id="inputComercio" class="form-control" disabled readonly>
                <option value="Si">Si</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="container-xl ">
        <h4 class="d-block p-2 bg-primary text-white">Información del negocio</h1>
    </div>
    <div class="form-group">
            <label for="inputAddress2">Direccion del negocio</label>
            <input type="text" class="form-control" id="inputAddress2" 
            placeholder="Domicilio del negocio" value = "{{$cliente->negocio}}"
            disabled readonly>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputBusinessType">Tipo de negocio</label>
            <input type="text" class="form-control" id="inputBusinessType"
            value = "{{$cliente->tipo_negocio}}" disabled readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="inputInventory">Inventario</label>
            <input type="text" class="form-control" id="inputInventory"
            value = "{{$cliente->inventario}}" disabled readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="inputCash">Efectivo</label>
            <input type="text" class="form-control" id="inputCash"
            value = "{{$cliente->efectivo}}" disabled readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="inputReceivable">Cuentas por cobrar</label>
            <input type="text" class="form-control" id="inputReceivable"
            value = "{{$cliente->ctas_acobrar}}" disabled readonly>
        </div>
      
        <div class="form-group col-md-3">
            <label for="inputCashSales">Ventas contado</label>
            <input type="text" class="form-control" id="inputCashSales"
            value = "{{$cliente->vtas_contado}}" disabled readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="inputCreditSales">Ventas credito</label>
            <input type="text" class="form-control" id="inputCreditSales"
            value = "{{$cliente->vtas_cred}}" disabled readonly>
        </div>
        <div class="form-group col-md-3">
            <label for="inputOtherIncome">Otros ingresos</label>
            <input type="decimal" class="form-control" id="inputOtherIncome"
            value = "{{$cliente->otros_ingresos}}" disabled readonly>
        </div>

    </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
    </form>
</div>

 
@stop


@section('js')
<script>
    var triggerTabList = [].slice.call(document.querySelectorAll('#pills-home-tab'))
triggerTabList.forEach(function (triggerEl) {
  var tabTrigger = new bootstrap.Tab(triggerEl)

  triggerEl.addEventListener('click', function (event) {
    event.preventDefault()
    tabTrigger.show()
  })
})
</script>
@stop