<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tconsumo;

class TconsumoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tconsumos = Tconsumo::all();
        return view('tconsumo.index')->with('tconsumos',$tconsumos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tconsumo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tconsumos = new Tconsumo();
        
        $tconsumos->descripcion = $request->get('descripcion');
        $tconsumos->cubos_ini = $request->get('cubos_ini');
        $tconsumos->cubos_fin = $request->get('cubos_fin');
        $tconsumos->costo = $request->get('costo');

        $tconsumos->save();

        return redirect('/Tconsumos');
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
        $tconsumo=Tconsumo::find('$id');
        return view('tconsumo.edit')->with('tconsumo',$tconsumo);
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
        $tconsumo = Tconsumo::find($id);
        
        $tconsumo->descripcion = $request->get('descripcion');
        $tconsumo->cubos_ini = $request->get('cubos_ini');
        $tconsumo->cubos_fin = $request->get('cubos_fin');
        $tconsumo->costo = $request->get('costo');

        $tconsumo->save();

        return redirect('/Tconsumos');
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
