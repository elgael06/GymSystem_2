<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClienteManagerController extends Controller
{
    //
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Cliente = Cliente::all();
        return response()->json($Cliente);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Cliente = new Cliente([
            'id'      =>$request->get('id'),
            'nombre'  => $request->get('nombre'),
            'ciudad'  => $request->get('ciudad'),
            'calle'   => $request->get('calle'),
            'telefono'=> $request->get('telefono'),
            'foto'    => $request->get('foto'),
            'huella'  => $request->get('huella'),
            'email'   => $request->get('email'),
            'detalles'=> $request->get('detalles'),
            'estatus' => $request->get('estatus')
        ]);
        $Cliente->save();


        return response()->json('Cliente Guardado.');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Cliente = Cliente::find($id);
        return response()->json($Cliente);
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
        $Cliente = Cliente::find($id);
        $Cliente->nombre = $request->get('nombre');
        $Cliente->ciudad = $request->get('ciudad');
        $Cliente->calle = $request->get('calle');
        $Cliente->telefono = $request->get('telefono');
        $Cliente->foto = $request->get('foto');
        $Cliente->huella = $request->get('huella');
        $Cliente->email = $request->get('email');
        $Cliente->detalles = $request->get('detalles');
        $Cliente->estatus = $request->get('estatus');
        $Cliente->save();


        return response()->json('Cliente Actualizado.');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $Cliente = Cliente::find($id);
      $Cliente->delete();


      return response()->json('Cliente Eliminado.');
    }
}
