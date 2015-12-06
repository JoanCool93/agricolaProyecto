<?php

namespace AgricolaGrain\Http\Controllers;

use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Requests\LoginRequest;
use AgricolaGrain\Http\Controllers\Controller;

class LogController extends Controller
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
    public function store(LoginRequest $request)
    {

        if(Auth::attempt(['correoElectronico' => $request['correoElectronico'], 'password' => $request['password']])){
            return Redirect::to('/perfilUsuario');
        }/* elseif(Auth::attempt(['correoElectronico' => $request['correoElectronico'], 'password' => $request['password'], 'tipoUsuario' => 1])){
            return Redirect::to('/perfilUsuario');
        }elseif(Auth::attempt(['correoElectronico' => $request['correoElectronico'], 'password' => $request['password'], 'tipoUsuario' => 2])){
            return Redirect::to('/perfilUsuario');
        }*/ else{
            Session::flash('message-fallo', 'Datos incorrectos');
            return Redirect::to('/login');
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

    public function login()
    {
        return \View::make('auth.login');   
    }

    public function logout()
    {
        Auth::logout();

        return Redirect::to('/');  
    }
}
