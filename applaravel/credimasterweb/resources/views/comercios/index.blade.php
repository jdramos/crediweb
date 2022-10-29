@extends('adminlte::page')


@section('title', 'Credimaster Web')

@section('content_header')

<h1>Listado de comercios</h1>

<!-- <a href="comercios/create" class="btn btn-primary mb-3 fa-solid fa-circle-plus">Agregar comercio</a> !-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-target="#staticBackdrop">
	Agregar Comercio
</button>


@stop

@section('content')

<div>
	<div class="card">
		<div class="card-body">
			<table class="table table-striped" id="comercios">
				<thead class="bg-primary text_white">
					<tr>
						<td>ID</td>
						<td>Descripcion</td>
						<td>Riesgo</td>
						<td>Acciones</td>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

@include('comercios.modals.create')
@include('comercios.modals.edit')

@stop

@section('css')


@stop

@section('js')


<!-- Datatable !-->
<script>
	$(document).ready(function(e){
		e.preventDefault();
	})

	$(document).ready(function() {


		$('#comercios').DataTable({
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
				"lengthMenu": "Mostrar  _MENU_  registros por página",
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
			"ajax": "{{route('comercios.index')}}",
			"dataType": 'json',
			"scrollY": "50vh",
			"scrollCollapse": "true",

			"columns": [{
					data: 'id',

				},
				{
					data: 'descripcion',

				},
				{
					data: 'riesgos.descripcion',

				},
				{
					data: 'btn',
					serchable: false,
					orderable: false

				}
			],

		});
	});
</script>


<script>
	$('#exampleModal').submit(function(e) {
		e.preventDefault();
		Swal.fire({
			title: '¿Confirma crear el registro?',
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
					'El registro ha sido creado.',
					'success'
				)
				this.submit();
			}
		})
	});

	$(document).ready(function() {
		$('.js-example-basic-single').select2({
			width: 'resolve',

		});

	});
</script>

@stop