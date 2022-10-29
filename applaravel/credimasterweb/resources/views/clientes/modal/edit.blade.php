<form action="" method="POST" enctype="multipart/form-data">
    <!-- Large modal -->
    <div class="modal fade bd-example-modal-lg" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content"> <!-- Modal Content -->

        <div class="modal-header"><!-- Modal Header -->
            <div class="modal-title p-3 mb-2 bg-primary text-white" id="exampleModalCenterTitle">Agregar nuevo cliente</div>
        </div>

        <div class="container-xl"> <!-- Container -->
            <ul class="nav nav-tabs" id="myTab" role="tablist"> <!-- Tabs -->
            <li class="nav-item"> <!-- Tab 1 -->
                <a class="nav-link active" id="home-tab" value = "" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Datos Generales</a>
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
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
                <div class="container-xl">
                    <h1 class="d-block p-2"></h1>

                    <div class="form-row">
                    <div class="col-md-6 mb-3">
                        <label for="inputName">Nombres</label>
                        <input type="text"  class="form-control" id="inputName" requiered>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputLastName">Apellidos</label>
                        <input type="text" class="form-control" id="inputLastName">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputIdentification">Identificación</label>
                        <input type="text" class="form-control" id="idNumber">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputTel">País de emisión</label>
                        <input type="text" class="form-control" id="idIsueCountry">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputIdentification">Fecha de emisión</label>
                        <input type="date" class="form-control" id="idIsueDate">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputIdentification">Fecha de vencimiento</label>
                        <input type="date" class="form-control" id="idDueDate">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputTel">Edad</label>
                        <input type="text" class="form-control" id="inputTel">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputTel">Telefono</label>
                        <input type="text" class="form-control" id="inputTel">
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
                        <select id="inputState" class="form-control">
                            <option>Soltero</option>
                            <option>Casado</option>
                        </select>
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputProfesion">Prefesión/Oficio</label>
                        <input type="text" class="form-control" id="inputProfesion">
                    </div>
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-3">
                        <label for="inputIdentification">Fecha de nacimiento</label>
                        <input type="date" class="form-control" id="inputIdentification">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputProfesion">Nacionalidad</label>
                        <input type="text" class="form-control" id="inputProfesion">
                    </div>                   
                    <div class="form-group col-md-3">
                        <label for="inputTel">País de residencia</label>
                        <input type="text" class="form-control" id="inputTel">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="inputState">Género</label>
                        <select id="inputState" class="form-control">
                        <option>Masculino</option>
                        <option>Femenino</option>
                        </select>
                    </div>
                    </div>

                    <div class="form-group">
                    <label for="inputAddress">Dirección </label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="Domicilio donde habita">
                    </div>
                    
                    <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputComercio">Comercio</label>
                        <select id="inputComercio" class="form-control">
                        @foreach ($comercios as $comercio)
                            <option value="{{$comercio['num']}}">{{$comercio['descripcion']}}</option>
                        @endforeach          
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputComercio">Reportar al buró</label>
                        <select id="inputComercio" class="form-control">
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Tipo de casa</label>
                        <select id="inputState" class="form-control">
                        <option>Propia</option>
                        <option>Alquilada</option>
                        <option>Familiar</option>
                        </select>
                    </div>
                    </div>
                </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                <div class="form-group">
                    <label for="inputAddress2">Nombre del negocio</label>
                    <input type="text" class="form-control" id="businessName" placeholder="Domicilio del negocio">
                </div>

                <div class="form-group">
                    <label for="inputAddress2">Direccion del negocio</label>
                    <input type="text" class="form-control" id="businessAdress" placeholder="Domicilio del negocio">
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputBusinessType">Descripción negocio</label>
                    <input type="text" class="form-control" id="inputBusinessType">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputInventory">Telefono del negocio</label>
                    <input type="text" class="form-control" id="inputInventory">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputInventory">Origen de fondos</label>
                    <input type="text" class="form-control" id="inputInventory">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">Ingreso mensual equivalente a</label>
                        <select id="inputState" class="form-control">
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
                        <input type="number" class="form-control" id="inputInventory">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputInventory">Inventario</label>
                    <input type="number" class="form-control" id="inputInventory">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputCash">Efectivo</label>
                    <input type="number" class="form-control" id="inputCash">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputReceivable">Cuentas por cobrar</label>
                    <input type="number" class="form-control" id="inputReceivable">
                    </div>
                
                    <div class="form-group col-md-3">
                    <label for="inputCashSales">Ventas contado</label>
                    <input type="number" class="form-control" id="inputCashSales">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputCreditSales">Ventas credito</label>
                    <input type="number" class="form-control" id="inputCreditSales">
                    </div>
                    <div class="form-group col-md-3">
                    <label for="inputOtherIncome">Otros ingresos</label>
                    <input type="number" class="form-control" id="inputOtherIncome">
                    </div>
                </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <!--GARANTIAS-->
                </div>
            </div> 
            </div>    
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            <button type="button" class="btn btn-primary">Guardar</button>
        </div>
        </div>  <!-- End modal content -->
    </div>
    </div> <!--End Modal-->
</form>