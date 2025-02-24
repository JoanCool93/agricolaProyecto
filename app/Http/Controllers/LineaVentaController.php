<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Bodega;
use AgricolaGrain\Lineaventa;
use AgricolaGrain\Venta;
use AgricolaGrain\Grano;
use Auth;
use View;
use Session;
use Redirect;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class LineaVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $idGrano                =$request->grano;
        $lineaventa            = new Lineaventa();
        $lineaventa->idVenta  =$request->idVenta;
        $lineaventa->idGrano   =$idGrano;
        $lineaventa->cantidad  =$request->cantidad;
        $lineaventa->subTotal  =$request->cantidad * $lineaventa->grano->costo;
        $lineaventa->save();
        return Redirect::back();
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
        Lineaventa::destroy($id);

        Session::flash('message', 'Se ha eliminado de la venta el grano correctamente');
        return Redirect::back();
    }
}
