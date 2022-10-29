<a href="{{ route('clientes.edit', $idCli )}}" class="btn btn-primary">Ver</a>
@can('clientes.editar')
    <a href="{{ route('clientes.edit', $idCli )}}" class="btn btn-primary">Editar</a>     
@endcan

<!--<a href="" data-toggle="modal" data-target="#newClienteModal">Editar</a> -->
