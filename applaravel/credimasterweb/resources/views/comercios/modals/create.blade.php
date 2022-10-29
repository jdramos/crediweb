<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="{{ route ('comercios.store') }}" id="agregar" method="post">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar comercios</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">

					@csrf
					<div class="form-row">
						<div class="col">
							<label for="inputName">Descripcion</label>
							<input type="text" class="form-control" id="inputName" name="descripcion" requiered>
						</div>
					</div>

					<div class="form-row">
						<div class="col">
							<label for="inputName">Seleccione el riesgo</label>
							<select id="inputState" class="form-control" name="idRiesgo">
								@foreach ($riesgos as $riesgo)
								<option value="{{$riesgo->id}}">{{$riesgo->descripcion}}</option>
								@endforeach
							</select>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Modal -->

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