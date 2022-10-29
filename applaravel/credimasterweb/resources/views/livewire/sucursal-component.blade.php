<div>
	@include('sucursales.crear')
	<section>
		<div class="container">
			<table class="table table-hover">
				<thead class="table-primary">
					<tr>
						<th>ID</th>
						<th>Siglas</th>
						<th>Nombre</th>
						<th>Dirección</th>
						<th>Teléfono</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($sucursales as $sucursal)
					<tr>
						<td>{{$sucursal->id}}</td>
						<td>{{$sucursal->sigla}}</td>
						<td>{{$sucursal->nomsuc}}</td>
						<td>{{$sucursal->direccion}}</td>
						<td>{{$sucursal->telefono}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
			{{$sucursales->links()}}
		</div>
	</section>
</div>