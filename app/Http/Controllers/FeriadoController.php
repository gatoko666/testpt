<?php

namespace App\Http\Controllers;

use App\Feriado;
use Illuminate\Http\Request;

class FeriadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        
            $detalleferiado = Feriado::all();
           dd($detalleferiado);

          // return view('/user/generarferiados', compact('detalleferiado'));



    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'FechaDiaFeriado' => 'required',
            'DescripcionFeriado' => 'required',
            'TipoDetalleEspecial' => 'required',
            'RepetirFeriado' => 'required',
        ]);
  
        Feriado::create($request->all());
   
        return redirect('/user/generarferiados')->with('success','Feriado Agregado correctamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Feriado  $feriado
     * @return \Illuminate\Http\Response
     */
    public function show(Feriado $feriado)
    {
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Feriado  $feriado
     * @return \Illuminate\Http\Response
     */
    public function edit(Feriado $feriado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Feriado  $feriado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Feriado $feriado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Feriado  $feriado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Feriado $feriado)
    {
        //
    }


    public function obtenerDatos(Feriado $feriado)
    {
        $select = DB::select('select * from detalleferiado');
        return redirect('/user/generarferiados')->with('FechaDiaFeriado','DescripcionFeriado','TipoDetalleEspecial','RepetirFeriado',$select);
         
    }

    public function getData(){
        $data['detalleferiado']=DB::table('detalleferiado')-get();
        return redirect('/user/generarferiados');

    }

   


    
}
