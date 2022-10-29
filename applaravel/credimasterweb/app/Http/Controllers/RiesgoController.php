<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoRiesgos;
use Yajra\DataTables\DataTables;

class RiesgoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $riesgos = TipoRiesgos::all();
            return DataTables::of($riesgos)
                ->addColumn('btn', 'riesgos/actions')
                ->rawColumns(['btn'])
                ->make(true);
        }
        return view('riesgos.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('riesgos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $riesgo = new TipoRiesgos();
        $riesgo->descripcion    = $request->get('nomRiesgo');
        $riesgo->save();

        return redirect('/riesgos');
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
        $riesgo = TipoRiesgos::find($id);

        return view('riesgos.edit', compact('riesgo'));
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
        $riesgo = TipoRiesgos::find($id);

        $riesgo->descripcion = $request->get('nomRiesgo');
        $riesgo->save();

        return redirect('/riesgos');
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
