<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sucursal;
use App\Models\Zonas;
use App\Models\TipoRiesgos;
use Yajra\DataTables\DataTables;

class SucursalController extends Controller
{

    //Para que no se pueda acceder si no hay autenticación
    public function __construct(){
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tiporiesgos = TipoRiesgos::all();
        $departamentos = Zonas::all();
            
        return view('sucursales.index', compact('departamentos', 'tiporiesgos'));
        

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiporiesgos = TipoRiesgos::all();
        $departamentos = Zonas::all();
        return view('sucursales.create', compact('departamentos', 'tiporiesgos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sucursal = new Sucursal();
        $sucursal->sigla = $request->get('siglaSuc');
        $sucursal->nomsuc = $request->get('nomSuc');
        $sucursal->direccion = $request->get('dirSuc');
        $sucursal->telefono = $request->get('telSuc');
        $sucursal->zona = $request->get('zonaSuc');
        $sucursal->riesgoSuc = $request->get('riesgoSuc');
        

        $sucursal->Save();

        return redirect('/sucursales');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sucursal = Sucursal::find($id);
        $tiporiesgos = TipoRiesgos::all();
        $zonas = Zonas::all();
        return view('sucursales.edit', compact('sucursal', 'zonas', 'tiporiesgos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sucursal = Sucursal::find($id);
        $sucursal->nomSuc = $request->get('nomSuc');
        $sucursal->dirSuc = $request->get('dirSuc');
        $sucursal->telSuc = $request->get('telSuc');
        $sucursal->zona = $request->get('zonaSuc');
        $sucursal->riesgoZona = $request->get('riesgoZona');
        $sucursal->riesgoSuc = $request->get('riesgoSuc');

        $sucursal->Save();

        return redirect('/sucursales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

 
}
