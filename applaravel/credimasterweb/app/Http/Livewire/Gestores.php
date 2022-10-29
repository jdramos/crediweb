<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Gestor;

class Gestores extends Component
{
    public function render()
    {

        $gestores = Gestor::all();
        return view('livewire.gestores', compact('gestores'));
    }
}
