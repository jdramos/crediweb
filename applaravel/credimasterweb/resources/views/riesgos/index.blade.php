@extends('adminlte::page')

@section('title', 'Credimaster Web')

@section('content_header')
    <h1>Listado de riesgos </h1> 
    <a href="riesgos/create" class="btn btn-primary mb-3">Agregar riesgo</a>
@stop

@section('content')
<div>
    <div class="card">
            <div class="card-body">
                <table class="table table-striped" id="riesgos">
                    <thead class="bg-primary text_white">
                        <tr>
                            <td>Código</td>
                            <td>Nombre</td>
                            <td>Creado</td>
                            <td>Modificado</td>
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
            $('#riesgos').DataTable( {
                "language": {
                    "lengthMenu"    : "Mostrar _MENU_ registros por página",
                    "zeroRecords"   : "No hay registros",
                    "info"          : "Mostrando página _PAGE_ de _PAGES_",
                    "infoEmpty"     : "Ningun registro disponible",
                    "infoFiltered"  : "(filtrado de _MAX_ registros totales)",
                    "search"        : "Buscar", 
                    "paginate"      : {
                        "next"      : "Siguiente",
                        "previous"  : "Anterior",
                        }
                },
                "lengthMenu": [[10, 20, 50, -1], [10, 20, 50, "Todos"]],                
                "ajax": "{{route('riesgos.index')}}",
                "scrollY":        "50vh",
                "scrollCollapse": true,               
                "columns": [
                    {data: 'id'},
                    {data: 'nomsuc'},
                    {data: 'dirSuc'},
                    {data: 'telefono'},
                    {data: 'btn',  
                      searchable: false,
                      orderable: false}
                ]
            } );
        } );
    </script>

@stop