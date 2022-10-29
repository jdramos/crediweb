<!-- Modal -->
<div wire:ignore.self class="modal fade" id="agregarSucursalModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="staticBackdropLabel">Agregar sucursal</h5>
				<button type="button" class="btn" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-row">
						<div class="col-md-2 col-mb-4">
							<label for="inputName">Siglas</label>
							<input type="text" class="form-control" id="inputName" name="sigla" maxlength="3" wire:model="sigla">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="inputLastName">Nombre sucursal</label>
							<input type="text" class="form-control" id="nomsuc" maxlength="20" name="nomsuc" wire:model="nomsuc">
						</div>
					</div>
					<div class="mb-3">
						<label for="dirSuc" class="form-label">Dirección</label>
						<textarea class="form-control" name="direccion" rows="3" wire:model="direccion"></textarea>
					</div>
					<div class="mb-3">
						<label for="telSuc" class="form-label">Telefono sucursal</label>
						<input type="text" class="form-control" name="telefono" maxlength="20" aria-describedby="emailHelp" wire:model="telefono">
					</div>
					<!--!--->
				
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary" wire:click.prevent="store()">Crear</button>
			</div>
			</form>
		</div>
	</div>
</div>