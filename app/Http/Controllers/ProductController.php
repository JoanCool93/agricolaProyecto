<?php

namespace AgricolaGrain\Http\Controllers;

use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class ProductController extends Controller
{
	public function tomate()
    {
        return \View::make('productos/tomate');   
    }
    public function pepino()
    {
        return \View::make('productos/pepino');   
    }
    public function chile()
    {
        return \View::make('productos/chile');   
    }
    public function melon()
    {
        return \View::make('productos/melon');   
    }
    public function sandia()
    {
        return \View::make('productos/sandia');   
    }
    public function frijol()
    {
        return \View::make('productos/frijol');   
    }
    public function garbanzo()
    {
        return \View::make('productos/garbanzo');   
    }
    public function maiz()
    {
        return \View::make('productos/maiz');   
    }
    public function cafe()
    {
        return \View::make('productos/cafe');   
    }
}