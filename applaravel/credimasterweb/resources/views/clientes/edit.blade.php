@extends('adminlte::page')

@section('title', 'Editar cliente')

@section('content_header')

    <h1 class="d-block p-2 bg-primary text-white">Editar Cliente 
        [{{$cliente->codCli}} - {{$cliente->nombres}} {{$cliente->apellidos}}]</h1>
    
@stop

@section('css')

@stop

@section('content')
<div class="container-xl"> <!-- Container -->
    <form action="/clientes/{{$cliente->idCli}}" method="POST" id="formulario-editar">
        @method('PUT')
        @csrf

        <ul class="nav nav-tabs" id="myTab" role="tablist"> <!-- Tabs -->
        
            <li class="nav-item"> <!-- Tab 1 -->
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos Generales</a>
            </li>

            <li class="nav-item"> <!-- Tab 2 -->
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Datos del negocio</a>
            </li>

            <li class="nav-item"> <!-- Tab 3 -->
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Garantías</a>
            </li>

        </ul>

        <div class="container-md">
            <div class="tab-content" id="myTabContent">  <!-- Tab contents -->
            <!-- Tab 1 Datos generales -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <!-- Container inside Tab1 -->
                <div class="container-xl">
                    <h1 class="d-block p-2"></h1>

                    <!-- First Line -->
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombres">Nombres</label>
                            <input type="text" class="form-control form-control-sm" name="txtNombres" id="inputNombres" value = "{{$cliente->nombres}}" requiered >
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputLastName">Apellidos</label>
                            <input type="text" class="form-control form-control-sm" name="txtApellidos" id="inputLastName" value = "{{$cliente->apellidos}}">
                        </div>
                    </div>
                    <!-- End First Line -->

                    <!-- Second Line -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputIdentification">Identificación</label>
                            <input type="text" class="form-control form-control-sm" id="idNumber" value = "{{$cliente->cedula}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputTel">País de emisión</label>
                            <input type="text" class="form-control form-control-sm" id="idIsueCountry">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputIdentification">Fecha de emisión</label>
                            <input type="date" class="form-control form-control-sm" id="idIsueDate">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputIdentification">Fecha de vencimiento</label>
                            <input type="date" class="form-control form-control-sm" id="idDueDate">
                        </div>
                    </div>
                    <!-- End Second Line -->

                    <!-- Third Line -->
                    <div class="form-row">
                        <div class="form-group col-md-1">
                            <label for="inputTel">Edad</label>
                            <input type="text" class="form-control form-control-sm" id="inputTel" value = "{{$cliente->edad}}">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputTel">Telefono</label>
                            <input type="text" class="form-control form-control-sm" id="inputTel" value = "{{$cliente->telefono}}">
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputState">Género</label>
                            <select id="inputState" class="form-control">
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Estado civil</label>
                            <select id="inputState" class="form-control form-control-sm">
                                <option>Soltero</option>
                                <option>Casado</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputProfesion">Prefesión/Oficio</label>
                            <input type="text" class="form-control form-control-sm" id="inputProfesion" value = "{{$cliente->oficio}}">
                        </div>
                    </div>
                    <!-- End Third Line -->

                    <!-- Fourth Line -->
                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for="inputIdentification">Fecha de nacimiento</label>
                            <input type="date" class="form-control form-control-sm" id="inputIdentification">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputProfesion">Nacionalidad</label>
                            <input type="text" class="form-control form-control-sm" id="inputProfesion">
                        </div>                   
                        <div class="form-group col-md-3">
                            <label for="inputTel">País de residencia</label>
                            <input type="text" class="form-control form-control-sm" id="inputTel">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Género</label>
                            <select id="inputState" class="form-control form-control-sm">
                            <option>Masculino</option>
                            <option>Femenino</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Fourth Line -->

                    <!-- Fith Line -->
                    <div class="form-group">
                        <label for="inputAddress">Dirección </label>
                        <input type="text" class="form-control form-control-sm" id="inputAddress" placeholder="Domicilio donde habita" value = "{{$cliente->domicilio}}">
                    </div>
                    <!-- End Fith Line -->

                    <!-- Sixth Line -->
                    <div class="form-row">
                        <div class="form-group col-md-4">
                            <label for="inputComercio">Reportar al buró</label>
                            <select id="inputComercio" class="form-control form-control-sm">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState">Tipo de casa</label>
                            <select id="inputState" class="form-control form-control-sm">
                                <option>Propia</option>
                                <option>Alquilada</option>
                                <option>Familiar</option>
                            </select>
                        </div>
                    </div>
                    <!-- End Sixth Line -->
                </div> <!-- End Container inside Tab1 -->
            </div> 
            <!-- End Tab 1 Datos generales -->


            <!-- Tab 2 Datos del negocio  -->
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <!-- First Line  -->
                <div class="form-group">
                    <label for="inputAddress2">Nombre del negocio</label>
                    <input type="text" class="form-control form-control-sm" id="businessName" placeholder="Nombre del negocio">
                </div>
                <!-- End First Line  -->

                <!-- Second Line  -->
                <div class="form-group">
                    <label for="inputAddress2">Direccion del negocio</label>
                    <input type="text" class="form-control form-control-sm" id="businessAdress" placeholder="Domicilio del negocio" value = "{{$cliente->negocio}}">
                </div>
                <!-- End Second Line  -->
                
                <!-- Third Line  -->
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputBusinessType">Descripción negocio</label>
                        <input type="text" class="form-control form-control-sm" id="inputBusinessType">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputInventory">Telefono del negocio</label>
                        <input type="text" class="form-control form-control-sm" id="inputInventory">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputInventory">Origen de fondos</label>
                        <input type="text" class="form-control form-control-sm" id="inputInventory">
                    </div>
                </div>
                <!-- End Third Line  -->

                <!-- Tab 2-> Fourth Line  -->
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputState">Ingreso mensual equivalente a</label>
                        <select id="inputState" class="form-control form-control-sm">
                            <option>Menor de US$300</option>
                            <option>US$301 a US$600</option>
                            <option>US$601 a US$2,000</option>
                            <option>US$2,001 a US$3,000</option>
                            <option>US$3,001 a US$6,000</option>  
                            <option>Mayor de US$6,000</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputInventory">Ingresos Mensuales</label>
                        <input type="number" class="form-control form-control-sm" id="inputInventory">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputInventory">Inventario</label>
                        <input type="number" class="form-control form-control-sm" id="inputInventory" value = "{{$cliente->inventario}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCash">Efectivo</label>
                        <input type="number" class="form-control form-control-sm" id="inputCash" value = "{{$cliente->efectivo}}">
                    </div>
                </div>
                <!-- Tab 2-> End Fourth Line  -->
                
                <!-- Tab 2-> Fifth Line  -->
                <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputReceivable">Cuentas por cobrar</label>
                        <input type="number" class="form-control form-control-sm" id="inputReceivable" value = "{{$cliente->ctas_acobrar}}">
                    </div>
            
                    <div class="form-group col-md-3">
                        <label for="inputCashSales">Ventas contado</label>
                        <input type="number" class="form-control form-control-sm" id="inputCashSales" value = "{{$cliente->vtas_contado}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputCreditSales">Ventas credito</label>
                        <input type="number" class="form-control form-control-sm" id="inputCreditSales" value = "{{$cliente->vtas_cred}}">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputOtherIncome">Otros ingresos</label>
                        <input type="number" class="form-control form-control-sm" id="inputOtherIncome" value = "{{$cliente->otros_ingresos}}"> 
                    </div>
                </div>
                <!-- Tab 2-> End Fifth Line  -->

                <!-- Tab 2-> Sixth Line  -->
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputComercio">Comercio</label>
                        <select id="inputComercio" class="form-control form-control-sm">
                        @foreach ($comercios as $comercio)
                            <option value="{{$comercio['num']}}">{{$comercio['descripcion']}}</option>
                        @endforeach          
                        </select>
                    </div>
                </div>
                <!-- Tab 2-> End Sixth Line  -->
            </div>
            <!-- End Tab 2 Datos del negocio -->
            
            <!-- Tab 3 Garantias  -->
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <!--GARANTIAS-->
            </div>
            <!-- End Tab 3 Garantias  -->
            </div> 
        </div>    
        <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
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

        $(document).ready(function(){
            $("#inputInventory").inputmask("999,999,999.99");
        
        });
    </script>
@stop

