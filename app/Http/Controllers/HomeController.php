<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	public function index()
    {
        return \View::make('home');   
    }
    public function acercaDe()
    {
        return \View::make('empresa');   
    }
    public function bodegas()
    {
        return \View::make('bodegas');   
    }
    public function blog()
    {
        return \View::make('blog');   
    }
    public function contacto()
    {
        return \View::make('contacto');   
    }
}
