<div>
	<div class="card">

		@if ($users->count())
		<div class="card-body">
			<table class="table table-striped">
				<thead>
					<tr>
						<td>ID</td>
						<td>Nombre</td>
						<td>Email</td>
						<td></td>
					</tr>
				</thead>

				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->name}}</td>
						<td>{{$user->email}}</td>
						<td width="10px">
							<a class="btn btn-primary" href="/users/{{$user->id}}/edit">Editar</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="card-footer">
			{{$users->links()}}
		</div>
		@else
		<div class="card-body">
			<strong>No hay registros</strong>
		</div>
		@endif

	</div>
</div>