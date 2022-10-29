@extends('adminlte::page')
<!--@include('clientes.modal.create')
 @include('clientes.modal.edit')-->

@section('title', 'Credimaster Web')

@section('content_header')

<h1>Listado de clientes</h1>
@can('clientes.agregar')
<a href="clientes/create" class="btn btn-primary mb-3 fa-solid fa-circle-plus">Nuevo Cliente</a>
@endcan

<style type="text/css" rel="/css/primary.sccs"></style>


@stop

@section('content')

<div>
	<div class="card">
		<div class="card-body">
			<table class="table table-striped" id="clientes">
				<thead class="bg-primary text_white">
					<tr>
						<td>ID</td>
						<td>Código</td>
						<td>Nombre</td>
						<td>Apellidos</td>
						<td>Cedula</td>
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
			"ajax": "{{route('clientes.index')}}",
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
				{
					data: 'btn',
					searchable: false,
					orderable: false
				}
			],

		});
	});
</script>




@stop