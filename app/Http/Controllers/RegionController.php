<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Region;
use Session;
use Validator;
use Redirect;
use Input;
use Auth;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todos los regions
        $regiones = Region::paginate(5);

        // Carga la vista a la cual le pasa todos los regions.
        return \View::make('region.busquedaRegion', compact('regiones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('region.agregarRegion');
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
            'descripcion'       => 'required|max:255',
            'tipoRegion'        => 'required|max:255'
        );
        //  Se crea una instancia de Validator con todos los datos que obtuvo del
        //formulario usando la clase Input y los coteja con el arreglo rules.
        $validador = Validator::make(Input::all(), $reglas);
        //  Procesa la validación si hay algun error regresa a la pagina de registro
        //mostrando un mensaje con el error que se dio y manteniendo los datos a
        //excepción de contraseña.
        if ($validador->fails()) {
            return Redirect::to('region/create')
                ->withErrors($validador)
                ->withInput(Input::all());
        } else { 
            // Crea una instancia de region y se modifican sus atributos con los 
            //datos que se obtuvieron del formulario y se almacena en disco.
            Region::create($request->all());
            /*$region = new region;
            $region->mediumText('descripcion')  = Input::get('descripcion'); //$request->nombre; //
            $region->integer('ancho')           = Input::get('ancho'); //$request->nombre; //
            $region->integer('alto')            = Input::get('alto'); //$request->nombre; //
            $region->integer('profundidad')     = Input::get('profundidad'); //$request->nombre; //
            $region->string('construction')     = Input::get('construccion'); //$request->nombre; //
            $region->integer('costo')           = Input::get('costo'); //$request->nombre; //
            $region->integer('capacidadTotal')  = Input::get('capacidadTotal'); //$request->nombre; //
            $region->integer('capacidadUsada')  = 0;
            $region->integer('estadoregion')    = Input::get('estadoregion'); //$request->nombre; //
            $region->integer('tipoAcceso')      = Input::get('tipoAcceso'); //$request->nombre; //
            $region->save();*/

            // Session manda un mensaje de exito.
            Session::flash('message', 'Se ha creado exitosamente la region');
            // Redireccionmiento.
            return Redirect::to('/region');
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
        //Con el region dado lo busca y se lo pasa a la vista.
        $region = Region::find($id);
        return view('region.mostrarRegion', ['region'=>$region]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Con el region dado lo busca y se lo pasa a la vista.
        $region = Region::find($id);
        return view('region.modificarRegion', ['region'=>$region]);
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
        $region = Region::find($id);
        $region->fill($request->all());
        $region->save();

        Session::flash('message', 'Se actualizó la region correctamente');
        return Redirect::to('/region');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Region::destroy($id);

        Session::flash('message', 'Se eliminó la region correctamente');
        return Redirect::to('/region');
    }
}
