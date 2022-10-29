@extends('adminlte::page')


@section('title', 'Credimaster Web')

@section('content_header')


<h1>Listado de gestores</h1>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-target="#staticBackdrop">
	Agregar gestor
</button>

<livewire:counter>

@stop

@section('content')

@livewire('gestores')
@stop
@include('gestores.create')

@section('css')


@stop

@section('js')


<!-- Datatable !-->
<script>
	$(document).ready(function() {
		$('#clientes').DataTable({
			"autofill": "true",
			"colReorder": "true",
			"select": "true",
			"pagin": "true",
			"serverSide": "true",
			"stateSave": "true",
			"responsive": "true",
			"lengthMenu": [
				[10, 25, 50, -1],
				[10, 25, 50, "Todos"]
			],
			"language": {
				"lengthMenu": "Mostrar _MENU_ registros por página",
				"zeroRecords": "No hay registros",
				"info": "Mostrando página _PAGE_ de _PAGES_. Total registros _MAX_",
				"infoEmpty": "Ningun registro disponible",
				"infoFiltered": "(filtrado de _MAX_ registros totales)",
				"search": "Buscar",
				"paginate": {
					"next": "Siguiente",
					"previous": "Anterior",
				}
			},
			"ajax": "{{route('gestores.index')}}",
			"dataType": 'json',
			"scrollY": "50vh",
			"scrollCollapse": "true",

			"columns": [{
					data: 'idCli'
				},
				{
					data: 'codCli'
				},
				{
					data: 'nombres'
				},
				{
					data: 'apellidos'
				},
				{
					data: 'cedula'
				},
			],

		});
	});
</script>




@stop