<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sucursal;
use Livewire\WithPagination;

class Sucursales extends Component
{

	use WithPagination;
	protected $paginationTheme = 'bootstrap';


	public $sigla;
	public $nomsuc;
	public $direccion;
	public $telefono;
	public $zona;
	public $riesgosuc;

	public function resetInputs(){
		$this->sigla = "";
		$this->nomsuc = "";
		$this->direccion = "";
		$this->telefono = "";
	}

	protected $rules = [
		'sigla' 	=> 'required',
		'nomsuc' 	=> 'required',
		'direccion' => 'required',
		'telefono' 	=> 'required'
	];

	public function store(){

		$validation = $this->validate([
			'sigla' 	=> $this->sigla,
			'nomsuc' 	=> $this->nomsuc,
			'direccion' => $this->direccion,
			'telefono' 	=> $this->telefono
		]);

		Sucursal::create($validation);

		session()->flash('message', 'Registro creado satisfactoriamente');
		$this->resetInputs();
		$this->emit('sucursalAdded');
	}

	public function render()
	{
		$sucursales = Sucursal::orderBy('id', 'desc')->paginate();

		return view ('livewire.sucursal-component', ['sucursales'=>$sucursales]);
	}
}

