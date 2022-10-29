@extends('adminlte::page')

@section('title', 'Credimaster Web')

@section('content_header')
    <h1>Listado de departamentos </h1> 
    <a href="zonas/create" class="btn btn-primary mb-3">Agregar departamento</a>
@stop

@section('content')
<div>
    <div class="card">
      
            <div class="card-body">
                <table class="table table-striped" id="departamentos">
                    <thead class="bg-primary text_white">
                        <tr>
                            <td>Código</td>
                            <td>Nombre</td>
                            <td>Peso riesgo</td>
                            <td>Acciones</td>
                        </tr>
                    </thead>
                </table>
            </div>

          
        </div>
       
</div>

@stop

@section('css') 

@stop

@section('js')
    <script>
        $(document).ready(function() {
            $('#departamentos').DataTable( {
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
                "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "Todos"]],                
                "ajax": "{{route('zonas.index')}}",
                "scrollY":        "50vh",
                "scrollCollapse": true,               
                "columns": [
                    {data: 'id'},
                    {data: 'descripcion'},
                    {data: 'idRiesgo'},
                    {data: 'btn',  
                      searchable: false,
                      orderable: false}
                ]
            } );
        } );
    </script>

@stop