<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
	public function tomate()
    {
        return \View::make('Productos/tomate');   
    }
    public function pepino()
    {
        return \View::make('Productos/pepino');   
    }
    public function chile()
    {
        return \View::make('Productos/chile');   
    }
    public function melon()
    {
        return \View::make('Productos/melon');   
    }
    public function sandia()
    {
        return \View::make('Productos/sandia');   
    }
    public function frijol()
    {
        return \View::make('Productos/frijol');   
    }
    public function garbanzo()
    {
        return \View::make('Productos/garbanzo');   
    }
    public function maiz()
    {
        return \View::make('Productos/maiz');   
    }
    public function cafe()
    {
        return \View::make('Productos/cafe');   
    }
}