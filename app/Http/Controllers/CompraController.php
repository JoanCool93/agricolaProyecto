<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Bodega;
use AgricolaGrain\Usuario;
use AgricolaGrain\Lineacompra;
use AgricolaGrain\Compra;
use AgricolaGrain\Grano;
use Auth;
use View;
use Session;
use Redirect;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class CompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $lineaCompras = Lineacompra::all();
        // Obtener todos los usuarios
        $compras = Compra::paginate(5);

        // Carga la vista a la cual le pasa todos los usuarios.
        return \View::make('compra.indexCompra', compact(['compras', 'usuarios', 'lineaCompras']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id = Compra::max('id');
        $compra= Compra::find($id);
        $estado = $compra->estadoCompra;
        if ($estado != 0) {
            $compra                 = new Compra();
            $compra->idEmpleado     = Auth::user()->id;
            $compra->fecha          = date('Y-m-d');
            $compra->estadoCompra   = 0;
            $compra->save();
        }
        return Redirect::to('/registroCompra');
    }
    public function store(Request $request)
    {
        $id = Compra::max('id');
        $compra = Compra::find($id);
        $compra->estadoCompra = 1;
        $compra->save();

        Session::flash('message', 'Se ha finalizado la compra correctamente');
        return Redirect::to('/Perfil');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        Compra::destroy($id);

        Session::flash('message', 'Se ha cancelado la compra correctamente');
        return Redirect::to('/Perfil');
    }

    public function crearCompra()
    {
        $id                 = Compra::max('id');
        $compra            = Compra::find($id);
        $lineasCompra       = Lineacompra::where('idCompra', $compra->id)->get();
        $granos             = Grano::lists('variedad', 'id');
        return View::make('compra.crearCompra', compact(['granos', 'compra', 'lineasCompra']));
    }    
}
