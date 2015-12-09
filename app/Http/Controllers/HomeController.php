<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Bodega;
use AgricolaGrain\Especie;
use AgricolaGrain\Grano;
use AgricolaGrain\Region;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
    {
        return \View::make('admin.home');   
    }
    public function acercaDe()
    {
        return \View::make('paginas.empresa');   
    }
    public function productos()
    {
        $especies = Especie::all();
        $regiones = Region::all();
        $granos = Grano::paginate(3);
        return \View::make('paginas.productos', compact(['especies', 'regiones', 'granos']));
    }
    public function bodegas()
    {
        $bodegas = Bodega::paginate(5);
        return \View::make('paginas.bodegas', compact('bodegas'));   
    }
    public function blog()
    {
        return \View::make('paginas.blog');   
    }
    public function contacto()
    {
        return \View::make('paginas.contacto');   
    }
}
