<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Cliente;


class ClientesIndex extends Component
{
    use WithPagination;
    public $buscarCliente;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        
            $clientes = Cliente::where('nombres', 'LIKE', '%'.$this->buscarCliente.'%')
            ->orWhere('apellidos', 'LIKE', '%'.$this->buscarCliente.'%')
            ->paginate(5);
        
        return view('livewire.clientes-index', compact('clientes'));
        
    }
}
