<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="" id="agregarGestor" method="post">
				@csrf
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar gestor</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<label for="inputName">Nombre del gestor</label>
					<input type="text" class="form-control" id="inputName" name="nombreGestor" requiered>
					<label for="inputName">Cédula</label>
					<input type="text" class="form-control" id="inputName" name="cedulaGestor" requiered>
					<label for="inputName">Domicilio</label>
					<textarea class="form-control" id="inputName" name="domicilioGestor" rows="2"></textarea>
					<label for="inputName">Teléfono</label>
					<input type="text" class="form-control" id="inputName" name="telefonoGestor" requiered>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
<!-- End Modal -->