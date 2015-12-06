<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Usuario;
use Session;
use Validator;
use Redirect;
use Input;
use Auth;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Obtener todos los usuarios
        $usuarios = Usuario::paginate(5);

        // Carga la vista a la cual le pasa todos los usuarios.
        return \View::make('usuario.busquedaUsuario', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.crearUsuario');
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
            'apellidoPaterno'   => 'required|max:255',
            'apellidoMaterno'   => 'required|max:255',
            'correoElectronico' => 'required|email|max:255|unique:usuarios',
            'telefono'          => 'required|max:255',
            'celular'           => 'required|max:255',
            'password'          => 'required|confirmed|min:6',
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
            // Crea una instancia de usuario y se modifican sus atributos con los 
            //datos que se obtuvieron del formulario y se almacena en disco.
            $usuario = new Usuario;
            $usuario->nombre            = Input::get('nombre'); //$request->nombre; //
            $usuario->apellidoPaterno   = Input::get('apellidoPaterno'); //$request->apellidoPaterno; //
            $usuario->apellidoMaterno   = Input::get('apellidoMaterno'); //$request->apellidoMaterno; //
            $usuario->correoElectronico = Input::get('correoElectronico'); //$request->correo; //
            $usuario->telefono          = Input::get('telefono');//$request->telefono; //
            $usuario->celular           = Input::get('celular'); //$request->celular; //
            $usuario->password          = Input::get('password'); //$request->contraseña; //
            $usuario->tipoUsuario       = 0;
            $usuario->save();

            // Session manda un mensaje de exito.
            Session::flash('message', 'Se ha creado exitosamente el usuario');
            // Redireccionmiento.
            if (Auth::guest()) {
                return Redirect::to('/');
            } else {
                return Redirect::to('/usuario');
            }
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
        //Con el usuario dado lo busca y se lo pasa a la vista.
        $usuario = Usuario::find($id);
        return view('usuario.mostrarUsuario', ['usuario'=>$usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Con el usuario dado lo busca y se lo pasa a la vista.
        $usuario = Usuario::find($id);
        return view('usuario.modificarUsuario', ['usuario'=>$usuario]);
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
        $usuario = Usuario::find($id);
        $usuario->fill($request->all());
        $usuario->save();

        Session::flash('message', 'Se actualizó el usuario correctamente');
        return Redirect::to('/perfilUsuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Usuario::destroy($id);

        Session::flash('message', 'Se eliminó el usuario correctamente');
        return Redirect::to('/perfilUsuario');
    }

    public function perfil()
    {
        return \View::make('admin.dashboard');
    }

    public function agregar()
    {
        return view('usuario.agregarUsuario');
    }
}
