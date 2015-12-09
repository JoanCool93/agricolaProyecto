<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Bodega;
use AgricolaGrain\Usuario;
use AgricolaGrain\Renta;
use View;
use Validator;
use Session;
use Redirect;
use Input;
use Auth;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class RentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Usuario::all();
        $bodegas = Bodega::all();
        // Obtener todos los usuarios
        $rentas = Renta::paginate(5);

        // Carga la vista a la cual le pasa todos los usuarios.
        return \View::make('renta.indexRenta', compact(['rentas', 'usuarios', 'bodegas']));
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
        //Se crea un arreglo contra el cual se cotejaran los datos que se reciban.
        $reglas = array(
            'idBodega'      => 'required|max:255',
            'duracionMeses' => 'required|max:255',
        );

        //  Se crea una instancia de Validator con todos los datos que obtuvo del
        //formulario usando la clase Input y los coteja con el arreglo rules.
        $validador = Validator::make(Input::all(), $reglas);

        //  Procesa la validación si hay algun error regresa a la pagina de registro
        //mostrando un mensaje con el error que se dio y manteniendo los datos a
        //excepción de contraseña.
        if ($validador->fails()) {
            return Redirect::to('usuario/create')
                ->withErrors($validador)
                ->withInput(Input::except('password'));
        } else {
            echo $request->idBodega;
            $bodega = Bodega::find($request->idBodega)->first();
            $fechaInicio = date('Y-m-d');
            $meses = '+'.$request->duracionMeses.' month';
            $fechaTermino = date('Y-m-d',strtotime($meses, strtotime($fechaInicio)));
            $data = [
                'idCliente'     => Auth::user()->id,
                'idBodega'      => $request->idBodega,
                'fechaInicio'   => $fechaInicio,
                'fechaTermino'  => $fechaTermino,
                'duracionMeses' => $request->duracionMeses,
                'importe'       => $request->duracionMeses * $bodega->costoMensual
            ];
            Renta::create($data);

            // Modificacion del estado de la bodega
            $bodega = Bodega::find($request->idBodega);
            $bodega->estadoBodega = 1;
            $bodega->save();
            // Session manda un mensaje de exito.
            Session::flash('message', 'Se ha rentado exitosamente la bodega');
            // Redireccionmiento.
            return Redirect::to('/rentar');
        }
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

    public function crearRenta($id=0)
    {
        $sid = $id;
        $bodegas = Bodega::where('estadoBodega', 0)->get();
        $bodegas = $bodegas->lists('nombre', 'id');
        return View::make('renta.crearRenta', compact(['bodegas', 'sid']));
    } 
}
