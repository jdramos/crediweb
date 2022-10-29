<h1>Listado de clientes </h1> 
   <!-- <a href="clientes/create" class="btn btn-primary mb-3">Nuevo Cliente</a> -->
    <button type="button" class="btn btn-primary" data-toggle="modal" 
    data-target=".bd-example-modal-lg">Nuevo cliente</button>

<div>
  <div class="card">
    <div class="card-body">
      <table class="table table-striped" id ="clientes" class>
        <thead class="bg-primary text_white">
          <tr>
            <td>ID</td>
            <td>Código</td>
            <td>Nombres</td>
            <td>Apellidos</td>
            <td>Cedula</td>
            <td>Acciones</td>
          </tr>
        </thead>       
      </table>
    </div>
  </div>
</div>

<!-- Large modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content"> <!-- Modal Content -->
      <div class="modal-header"><!-- Modal Header -->
        <div class="modal-title p-3 mb-2 bg-primary text-white" id="exampleModalCenterTitle">Agregar nuevo cliente</div>
      </div>
      
      <div class="container-xl"> <!-- Container -->
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
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="container-xl">
                  <h1 class="d-block p-2"></h1>
                  <div class="form-row">
                    <div class="col-md-6 mb-3">
                      <label for="inputName">Nombres</label>
                      <input type="text" class="form-control" id="inputName" requiered>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputLastName">Apellidos</label>
                      <input type="text" class="form-control" id="inputLastName">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-3">
                      <label for="inputIdentification">Identificación</label>
                      <input type="text" class="form-control" id="inputIdentification">
                    </div>
                    <div class="form-group col-md-1">
                        <label for="inputTel">Edad</label>
                        <input type="text" class="form-control" id="inputTel">
                    </div>
                    <div class="form-group col-md-2">
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
                    <div class="form-group col-md-2">
                      <label for="inputState">Estado civil</label>
                      <select id="inputState" class="form-control">
                          <option>Soltero</option>
                          <option>Casado</option>
                      </select>
                    </div>
                    <div class="form-group col-md-2">
                      <label for="inputProfesion">Prefesión/Oficio</label>
                      <input type="text" class="form-control" id="inputProfesion">
                    </div> 
          </div>
                    <div class="form-group">
                        <label for="inputAddress">Dirección </label>
                        <input type="text" class="form-control" id="inputAddress" placeholder="Domicilio donde habita">
                    </div>
                    <label for="inputState">Tipo de casa</label>
                      <select id="inputState" class="form-control">
                          <option>Propia</option>
                          <option>Alquilada</option>
                          <option>Familiar</option>
                      </select>
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
                    </div>
                </div>
            </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="form-group">
                <label for="inputAddress2">Direccion del negocio</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Domicilio del negocio">
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputBusinessType">Tipo de negocio</label>
                    <input type="text" class="form-control" id="inputBusinessType">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputInventory">Inventario</label>
                    <input type="text" class="form-control" id="inputInventory">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCash">Efectivo</label>
                    <input type="text" class="form-control" id="inputCash">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputReceivable">Cuentas por cobrar</label>
                    <input type="text" class="form-control" id="inputReceivable">
                </div>
            
                <div class="form-group col-md-3">
                    <label for="inputCashSales">Ventas contado</label>
                    <input type="text" class="form-control" id="inputCashSales">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputCreditSales">Ventas credito</label>
                    <input type="text" class="form-control" id="inputCreditSales">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputOtherIncome">Otros ingresos</label>
                    <input type="text" class="form-control" id="inputOtherIncome">
                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div> 
      </div>    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-primary">Guardar</button>
      </div>
    </div>  <!-- End Container -->
    
  </div>
</div> <!--End Modal-->

<script src = "https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src = "https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src = "https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    
    <!-- Datatable !-->
    <script>

        $(document).ready(function() {
            $('#clientes').DataTable( {
                "autofill": "true",
                "colReorder": "true",
                "select": "true",
                "pagin": "true",
                "stateSave": "true",
                "dom": "Bfrtip",  
                "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                "language": {
                  "lengthMenu": "Mostrar _MENU_ registros por página",
                  "zeroRecords": "No hay registros",
                  "info": "Mostrando página _PAGE_ de _PAGES_",
                  "infoEmpty": "Ningun registro disponible",
                  "infoFiltered": "(filtrado de _MAX_ registros totales)",
                  "search": "Buscar", 
                  "paginate": {
                    "next": "Siguiente",
                    "previous": "Anterior",
                    }
                },
               
             
                "ajax": "{{ url('api/clientes') }}",
                "scrollY": "50vh",
                "scrollCollapse": "true",
                
                "columns": [
                    {data: 'idCli'},
                    {data: 'codCli'},
                    {data: 'nombres'},
                    {data: 'apellidos'},
                    {data: 'cedula'},
                    {data: 'btn'},
                ],

            } );
        } );

   
    
    </script>
