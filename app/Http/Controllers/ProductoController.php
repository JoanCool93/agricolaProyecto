<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Grano;
use AgricolaGrain\Region;
use AgricolaGrain\Especie;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class ProductoController extends Controller
{
    public function especie($descripcion)
    {
        $especies = Especie::all();
        $regiones = Region::all();
        $especie = Especie::where('descripcion', $descripcion)
        ->first();
        $granos = Grano::where('especie', $especie->id)
        ->get();
        return \View::make('paginas/especie', compact(['especies', 'regiones','especie', 'granos']));   
    }
	public function region($descripcion)
    {
        $especies = Especie::all();
        $regiones = Region::all();
        $region = Region::where('descripcion', $descripcion)
        ->first();
        $granos = Grano::where('region', $region->id)
        ->get();
        return \View::make('paginas/region', compact(['especies', 'regiones', 'granos', 'region']));   
    }
    public function productoEspecie($especie, $variedad)
    {
        $granos = Grano::where('especie', $especie->id)
        ->first;
        return \View::make('paginas/grano');   
    }
    public function productoRegion($region, $variedad)
    {
        $granos = Grano::where('especie', $region->id)
        ->first();
        return \View::make('paginas/grano');   
    }
}