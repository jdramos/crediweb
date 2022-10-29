<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Comercio;
use App\Models\User;
use Carbon\Carbon;
use Yajra\DataTables\DataTables;

class ClienteController extends Controller
{
    use WithPagination;

    public function __construct(){
        $this->middleware('auth');
    }

    public function index(Request $request)
    {

        $comercios = Comercio::all();  
        $todasSuc = auth()->user()->todasSuc;
        $sucUsuario = auth()->user()->numSuc;

        if ($request->ajax()) {
            if($todasSuc == 1){
                $clientes = Cliente::select('clientes.*');
            }else{
                $clientes = Cliente::select('clientes.*')->where('numSuc', $sucUsuario);
            }
            return DataTables::of($clientes)
                ->addColumn('btn', 'clientes/actions')
                ->rawColumns(['btn'])
                ->make(true);
        }
        
        return view('clientes.index', compact( 'comercios', 'todasSuc', 'sucUsuario'));
    }


   public function create(){
      
       $comercios = Comercio::all();
       return view('clientes.create', compact('comercios'));

   }

   public function store(Request $request)
    {
        $cliente                    = new Cliente();
        $date                       = Carbon::now();
        $numSuc                     = auth()->user()->numSuc;
        $todasSuc                   = auth()->user()->todasSuc;
        $cliente->nombres           = $request->get('txtNombres');
        $cliente->apellidos         = $request->get('txtApellidos');
        $cliente->identificacion    = $request->get('txtIdentificacion');
        $cliente->paisEmisionId     = $request->get('txtPaisEmisionId');
        $cliente->fechaEmisionId    = $request->get('txtFechaEmisionId');
        $cliente->fechaVenceId      = $request->get('txtFechaVenceId');
        $cliente->edad              = $request->get('txtEdad');
        $cliente->telefono          = $request->get('txtTelefono');
        $cliente->genero            = $request->get('txtGenero');
        $cliente->estadoCivil       = $request->get('txtEstadoCivil');
        $cliente->oficio            = $request->get('txtOficio');
        $cliente->fechaNacimiento   = $request->get('txtFechaNacimiento');
        $cliente->nacionalidad      = $request->get('txtNacionalidad');
        $cliente->paisResidencia    = $request->get('txtPaisResidencia');
        $cliente->direccionDomicilio= $request->get('txtDireccionDomicilio');
        $cliente->buro              = $request->get('reportarBuro');
        $cliente->tipoCasa          = $request->get('tipoCasa');
        $cliente->nombreNegocio     = $request->get('txtNombreNegocio');
        $cliente->direccionNegocio  = $request->get('txtDireccionNegocio');
        $cliente->tipoNegocio       = $request->get('txtTipoNegocio');
        $cliente->telefonoNegocio   = $request->get('txtTelefonoNegocio');
        $cliente->origenFondos      = $request->get('txtOrigenFondos');
        $cliente->ingresoEquivalente= $request->get('txtIngresosEquivalentes');
        $cliente->ingresoMensual    = $request->get('txtIngresosMensuales');
        $cliente->valorInventario   = $request->get('txtValorInventario');
        $cliente->valorEfectivo     = $request->get('txtValorEfectivo');
        $cliente->cuentasPorCobrar  = $request->get('txtCuentasPorCobrar');
        $cliente->ventasContado     = $request->get('txtVentasContado');
        $cliente->ventasCredito     = $request->get('txtVentasCredito');
        $cliente->otrosIngresos     = $request->get('txtOtrosIngresos');
        $cliente->idComercio        = $request->get('idComercio');
        $cliente->fechaActualizacion= $date;
        $cliente->numSuc = $numSuc;

        $cliente->Save();

        return redirect('/clientes');

    }

   public function update(Request $request, $idCli)
    {
        $cliente = Cliente::find($idCli); 
        $cliente->nombres = $request->get('txtNombres');
        $cliente->apellidos = $request->get('txtApellidos');
        $cliente->save();

       return redirect('/clientes');
    }

   public function show(Cliente $cliente){

    $comercios = Comercio::all();  
    $cliente = Cliente::find($cliente);
    return view('clientes.view', compact('cliente', 'comercios'));

}

    public function edit($idCli){

        $comercios = Comercio::all();  
        $cliente = Cliente::find($idCli);
        return view('clientes.edit', compact('cliente', 'comercios'));

    }

   public function destroy($id)
    {
        
    }

   
        
}
