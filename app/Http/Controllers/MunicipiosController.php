<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Modelos\Entidades;
use App\Modelos\Municipios;

class MunicipiosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $muncipios = Municipios::where('status',1)->orderBy('id_entidad')
            ->orderBy('nombre')->get();
        return view ('Municipios.index')->with('municipios',$muncipios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $entidades = Entidades::select('id','nombre')->orderBy('nombre')->get();
        return view('Municipios.create')->with('entidades',$entidades);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos = $request->all();
        Municipios::create($datos);
        return redirect('/municipios');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $muncipios = Municipios::find($id);
        return view('Municipios.read')->with('municipio',$muncipios);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $muncipio = Municipios::find($id);
        $entidades = Entidades::select('id','nombre')->orderBy('nombre')->get();
        return view('Municipios.edit')->with('municipio',$muncipio)->with('entidades',$entidades);
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
        $datos = $request->all();
        $muncipio = Municipios::find($id);
        $muncipio->update($datos);
        return redirect('/municipios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $muncipio = Municipios::find($id);
        $muncipio->status = 0;
        $muncipio->save();
        return redirect('/municipios');
    }
}
