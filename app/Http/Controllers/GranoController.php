<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Grano;
use AgricolaGrain\Especie;
use AgricolaGrain\Region;
use Session;
use Validator;
use Redirect;
use Input;
use Auth;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class GranoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todos los granos
        $granos = Grano::paginate(5);
        $especies = Especie::lists('descripcion', 'id');
        $regiones = Region::lists('descripcion', 'id');

        // Carga la vista a la cual le pasa todos los granos.
        return \View::make('grano.busquedaGrano', compact(['granos', 'especies', 'regiones']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especies = Especie::lists('descripcion', 'id');
        $regiones = Region::lists('descripcion', 'id');
        return view('grano.agregarGrano', compact(['especies', 'regiones']));
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
            'especie'           => 'required|max:255',
            'variedad'          => 'required|max:255',
            'descripcion'       => 'required|max:255',
            'costo'             => 'required|max:255',
            'tamañoPlanta'      => 'required|max:255',
            'tamañoFruto'       => 'required|max:255',
            'region'            => 'required|max:255',
            'forma'             => 'required|max:255',
            'periodoMaduracion' => 'required|max:255',
            'resistencias'      => 'required|max:255',
            'clima'             => 'required|max:255'
        );
        //  Se crea una instancia de Validator con todos los datos que obtuvo del
        //formulario usando la clase Input y los coteja con el arreglo rules.
        $validador = Validator::make(Input::all(), $reglas);
        //  Procesa la validación si hay algun error regresa a la pagina de registro
        //mostrando un mensaje con el error que se dio y manteniendo los datos a
        //excepción de contraseña.
        if ($validador->fails()) {
            return Redirect::to('grano/create')
                ->withErrors($validador)
                ->withInput(Input::all());
        } else { 
            // Crea una instancia de grano y se modifican sus atributos con los 
            //datos que se obtuvieron del formulario y se almacena en disco.
            Grano::create($request->all());
            /*$grano = new grano;
            $grano->mediumText('especie')           = Input::get('especie'); //$request->nombre; //
            $grano->integer('variedad')             = Input::get('variedad'); //$request->nombre; //
            $grano->integer('descripcion')          = Input::get('descripcion'); //$request->nombre; //
            $grano->integer('tamañoPlanta')         = Input::get('tamañoPlanta'); //$request->nombre; //
            $grano->string('tamañoFruto')           = Input::get('tamañoFruto'); //$request->nombre; //
            $grano->integer('region')               = Input::get('region'); //$request->nombre; //
            $grano->integer('forma')                = Input::get('forma'); //$request->nombre; //
            $grano->integer('periodoMaduracion')    = Input::get('periodoMaduracion'); //$request->nombre; //
            $grano->integer('resistencias')         = Input::get('resistencias'); //$request->nombre; //
            $grano->integer('clima')                = Input::get('clima'); //$request->nombre; //
            $grano->save();*/

            // Session manda un mensaje de exito.
            Session::flash('message', 'Se ha creado exitosamente la grano');
            // Redireccionmiento.
            return Redirect::to('/grano');
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
        //Con el grano dado lo busca y se lo pasa a la vista.
        $grano = Grano::find($id);
        return view('grano.mostrarGrano', ['grano'=>$grano]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Con el grano dado lo busca y se lo pasa a la vista.
        $grano = Grano::find($id);
        $especies = Especie::lists('descripcion', 'id');
        $regiones = Region::lists('descripcion', 'id');
        return view('grano.modificarGrano', compact(['especies', 'regiones', 'grano']));
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
        $grano = Grano::find($id);
        $grano->fill($request->all());
        $grano->save();

        Session::flash('message', 'Se actualizó el grano correctamente');
        return Redirect::to('/grano');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Grano::destroy($id);

        Session::flash('message', 'Se eliminó la grano correctamente');
        return Redirect::to('/grano');
    }
}
