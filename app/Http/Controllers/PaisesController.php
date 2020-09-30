<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelos\Paises;

class PaisesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $paises = Paises::all();
        $paises = Paises::orderBy('id')->get();
        $paises = Paises::where ('status','=',1)->orderBy('nombre')->get();
        $paises = Paises::where('status',1)->orderBy('nombre','desc')->get();
        //Uso de un and-> ej select * from paises where status = 1 and clave = mx orderby nombre asc;
        $paises = Paises::where('status',1)->where('clave','MX')->orderBy('nombre','asc')->get();
        //Ej or ->
        $paises = Paises::where('status',1)->orwhere('clave','MX')->orderBy('nombre','asc')->get(); */
        
        $paises = Paises::where('status',1)->orderBy('nombre')->get();

        return view('Paises.index')->with('paises',$paises);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* lo unico que hace es abrir el formulario de crear */
        return view('Paises.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //hace el guardado de los datos que se atrapan con request
        $datos = $request->all();
        Paises::create($datos);
        return redirect('/paises');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Se registra el detalle de un registro en particular
        $pais = Paises::find($id);
        return view('Paises.read')->with('pais',$pais);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //se abre el formulario para editar con datos precargados
        $pais = Paises::find($id);
        return view('Paises.edit')->with('pais',$pais);
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
        $pais = Paises::find($id);
        $pais->update($datos);
        return redirect('/paises');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //hay dos opciones borrados fisicos y borrados logicos
        $pais = Paises::find($id);
        $pais->status = 0;
        $pais->save();

        return redirect('/paises');
    }
}
