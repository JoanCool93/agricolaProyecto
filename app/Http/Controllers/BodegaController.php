<?php
namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Bodega;
use Session;
use Validator;
use Redirect;
use Input;
use Auth;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class bodegaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todos los bodegas
        $bodegas = Bodega::paginate(5);

        // Carga la vista a la cual le pasa todos los bodegas.
        return \View::make('bodega.busquedaBodega', compact('bodegas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bodega.agregarBodega');
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
            'nombre'            => 'required|max:255',
            'descripcion'       => 'required|max:255',
            'ancho'             => 'required|max:255',
            'alto'              => 'required|max:255',
            'profundidad'       => 'required|max:255',
            'construccion'      => 'required|max:255',
            'costoMensual'      => 'required|max:255',
            'costoAnual'        => 'required|max:255',
            'capacidadTotal'    => 'required|max:255',
            'tipoAcceso'        => 'required|max:255'
        );
        //  Se crea una instancia de Validator con todos los datos que obtuvo del
        //formulario usando la clase Input y los coteja con el arreglo rules.
        $validador = Validator::make(Input::all(), $reglas);
        //  Procesa la validación si hay algun error regresa a la pagina de registro
        //mostrando un mensaje con el error que se dio y manteniendo los datos a
        //excepción de contraseña.
        if ($validador->fails()) {
            return Redirect::to('bodega/create')
                ->withErrors($validador)
                ->withInput(Input::all());
        } else { 
            // Crea una instancia de bodega y se modifican sus atributos con los 
            //datos que se obtuvieron del formulario y se almacena en disco.
            Bodega::create($request->all());
            /*$bodega = new Bodega;
            $bodega->mediumText('descripcion')  = Input::get('descripcion'); //$request->nombre; //
            $bodega->integer('ancho')           = Input::get('ancho'); //$request->nombre; //
            $bodega->integer('alto')            = Input::get('alto'); //$request->nombre; //
            $bodega->integer('profundidad')     = Input::get('profundidad'); //$request->nombre; //
            $bodega->string('construction')     = Input::get('construccion'); //$request->nombre; //
            $bodega->integer('costo')           = Input::get('costo'); //$request->nombre; //
            $bodega->integer('capacidadTotal')  = Input::get('capacidadTotal'); //$request->nombre; //
            $bodega->integer('capacidadUsada')  = 0;
            $bodega->integer('estadoBodega')    = Input::get('estadoBodega'); //$request->nombre; //
            $bodega->integer('tipoAcceso')      = Input::get('tipoAcceso'); //$request->nombre; //
            $bodega->save();*/

            // Session manda un mensaje de exito.
            Session::flash('message', 'Se ha creado exitosamente la bodega');
            // Redireccionmiento.
            return Redirect::to('/bodega');
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
        //Con el bodega dado lo busca y se lo pasa a la vista.
        $bodega = Bodega::find($id);
        return view('bodega.mostrarbodega', ['bodega'=>$bodega]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Con el bodega dado lo busca y se lo pasa a la vista.
        $bodega = Bodega::find($id);
        return view('bodega.modificarbodega', ['bodega'=>$bodega]);
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
        $bodega = Bodega::find($id);
        $bodega->fill($request->all());
        $bodega->save();

        Session::flash('message', 'Se actualizó la bodega correctamente');
        return Redirect::to('/bodega');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bodega::destroy($id);

        Session::flash('message', 'Se eliminó la bodega correctamente');
        return Redirect::to('/bodega');
    }
}

