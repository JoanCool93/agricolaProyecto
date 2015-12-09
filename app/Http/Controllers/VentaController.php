<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Bodega;
use AgricolaGrain\Usuario;
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

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $lineaVentas = Lineaventa::all();
        // Obtener todos los usuarios
        $ventas = Venta::paginate(5);

        // Carga la vista a la cual le pasa todos los usuarios.
        return \View::make('venta.indexVenta', compact(['ventas', 'usuarios', 'lineaVentas']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }
    public function create2(Request $request)
    {
        $id = Venta::max('id');
        $venta= Venta::find($id);
        $estado = $venta->estadoVenta;
        if ($estado != 0) {
            $venta                 = new Venta();
            $venta->idCliente    = $request->idCliente;
            $venta->fecha          = date('Y-m-d');
            $venta->estadoVenta   = 0;
            $venta->save();
        }
        return Redirect::to('/registroVenta');
    }
    public function store(Request $request)
    {
        $id = Venta::max('id');
        $venta = Venta::find($id);
        $venta->estadoVenta = 1;
        $venta->save();

        Session::flash('message', 'Se ha finalizado la venta correctamente');
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
        Venta::destroy($id);

        Session::flash('message', 'Se ha cancelado la venta correctamente');
        return Redirect::to('/Perfil');
    }
    public function crearVenta()
    {
        $id                 = Venta::max('id');
        $venta            = Venta::find($id);
        $lineasVenta       = Lineaventa::where('idventa', $venta->id)->get();
        $granos             = Grano::lists('variedad', 'id');
        return View::make('venta.seleccionVenta', compact(['granos', 'venta', 'lineasVenta']));
    } 

    public function iniciarVenta()
    {
        $id = Venta::max('id');
        $venta = Venta::find($id);
        if ($venta->estadoVenta == 0 ) {
            $id                 = Venta::max('id');
            $venta            = Venta::find($id);
            $lineasVenta       = Lineaventa::where('idventa', $venta->id)->get();
            $granos             = Grano::lists('variedad', 'id');
            return View::make('venta.seleccionVenta', compact(['granos', 'venta', 'lineasVenta']));
        } else{       
            $clientes = Usuario::where('tipoUsuario', 0)->get();
            $clientes = $clientes->lists('nombre','id');
            return View::make('venta.crearVenta', compact(['clientes']));
        }
    }    
}
