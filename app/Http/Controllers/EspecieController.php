<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Especie;
use Session;
use Validator;
use Redirect;
use Input;
use Auth;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class EspecieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todos los especies
        $especies = Especie::paginate(5);

        // Carga la vista a la cual le pasa todos los especies.
        return \View::make('especie.indexEspecie', compact('especies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('especie.agregarEspecie');
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
        );
        //  Se crea una instancia de Validator con todos los datos que obtuvo del
        //formulario usando la clase Input y los coteja con el arreglo rules.
        $validador = Validator::make(Input::all(), $reglas);
        //  Procesa la validación si hay algun error regresa a la pagina de registro
        //mostrando un mensaje con el error que se dio y manteniendo los datos a
        //excepción de contraseña.
        if ($validador->fails()) {
            return Redirect::to('especie/create')
                ->withErrors($validador)
                ->withInput(Input::all());
        } else { 
            // Crea una instancia de especie y se modifican sus atributos con los 
            //datos que se obtuvieron del formulario y se almacena en disco.
            Especie::create($request->all());
            /*$especie = new especie;
            $especie->mediumText('descripcion')  = Input::get('descripcion'); //$request->nombre; //
            $especie->integer('ancho')           = Input::get('ancho'); //$request->nombre; //
            $especie->integer('alto')            = Input::get('alto'); //$request->nombre; //
            $especie->integer('profundidad')     = Input::get('profundidad'); //$request->nombre; //
            $especie->string('construction')     = Input::get('construccion'); //$request->nombre; //
            $especie->integer('costo')           = Input::get('costo'); //$request->nombre; //
            $especie->integer('capacidadTotal')  = Input::get('capacidadTotal'); //$request->nombre; //
            $especie->integer('capacidadUsada')  = 0;
            $especie->integer('estadoespecie')    = Input::get('estadoespecie'); //$request->nombre; //
            $especie->integer('tipoAcceso')      = Input::get('tipoAcceso'); //$request->nombre; //
            $especie->save();*/

            // Session manda un mensaje de exito.
            Session::flash('message', 'Se ha creado exitosamente la especie');
            // Redireccionmiento.
            return Redirect::to('/especie');
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
        //Con el especie dado lo busca y se lo pasa a la vista.
        $especie = Especie::find($id);
        return view('especie.mostrarEspecie', ['especie'=>$especie]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Con el especie dado lo busca y se lo pasa a la vista.
        $especie = Especie::find($id);
        return view('especie.modificarEspecie', ['especie'=>$especie]);
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
        $especie = Especie::find($id);
        $especie->fill($request->all());
        $especie->save();

        Session::flash('message', 'Se actualizó la especie correctamente');
        return Redirect::to('/especie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Especie::destroy($id);

        Session::flash('message', 'Se eliminó la especie correctamente');
        return Redirect::to('/especie');
    }
}
