<?php

namespace App\Http\Controllers;

use App\Models\Comercio;
use Yajra\DataTables\Facades\DataTables;
use App\Models\TipoRiesgos;
	use Illuminate\Http\Request;

class ComercioController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index(Request $request)
	{
		//$comercios = TipoRiesgos::with(['comercios'])->get();
	
		$riesgos = TipoRiesgos::all();

		if ($request->ajax()) {
			$comercios = Comercio::with('riesgos')->get();
			return DataTables::of($comercios)
				->addColumn('btn', 'riesgos/actions')
				->rawColumns(['btn'])
				->make(true);
		}
		//return $comercios;
		return view('comercios.index', compact('riesgos'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		return view('comercios.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{

		$comercio = new Comercio();
		$comercio->descripcion = $request->get('descripcion');
		$comercio->idRiesgo = $request->get('idRiesgo');
		$comercio->save();

		return redirect('comercios');
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
		//
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
		//
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
