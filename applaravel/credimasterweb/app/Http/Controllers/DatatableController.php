<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DepartamentoPais;

class DatatableController extends Controller
{
  

    public function departamentos(){
        $departamentos = DepartamentoPais::select('codCli', 'nombres', 'apellidos', 'cedula')->get();
        return $clientes;
    }
}
