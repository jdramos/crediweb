<?php

namespace App\Http\Controllers;
use App\Models\Zonas;
use App\Models\TipoRiesgos;
use Yajra\DataTables\DataTables;


use Illuminate\Http\Request;

class ZonaController extends Controller
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
        if ($request->ajax()) {
            $zonas = Zonas::select('zonas.*');
            return DataTables::of($zonas)
                ->addColumn('btn', 'zonas/actions')
                ->rawColumns(['btn'])
                ->make(true);
       }
        return view('zonas.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $riesgos = TipoRiesgos::all();

        return view('zonas.create', compact('riesgos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zona = new Zonas();
        $zona->descripcion  = $request->get('nomZona');
        $zona->idRiesgo       = $request->get('riesgo');
        $zona->save();

        return redirect('/zonas');

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
        $zona = Zonas::find($id);
        $riesgos = TipoRiesgos::all();

        return view('zonas.edit', compact('zona', 'riesgos'));
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
        $zona = Zonas::find($id);
        $zona->descripcion = $request->get('nomZona');
        $zona->save();

        return redirect('/zonas');
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
