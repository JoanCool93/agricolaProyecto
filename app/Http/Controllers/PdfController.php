<?php

namespace AgricolaGrain\Http\Controllers;

use AgricolaGrain\Grano;
use AgricolaGrain\Bodega;
use Illuminate\Http\Request;
use AgricolaGrain\Http\Requests;
use AgricolaGrain\Http\Controllers\Controller;

class PdfController extends Controller
{
    public function invoice() 
    {
        $data = $this->getData();
        $date = date('Y-m-d');
        $invoice = "2222";
        $view =  \View::make('pdf.invoice', compact('data', 'date', 'invoice'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('invoice');
    }
    public function producto($especie, $variedad) 
    {
        $grano = Grano::where('variedad', $variedad)
        ->first();
        $view =  \View::make('pdf.detalleGrano', compact('grano'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('detalleProducto');
    }
    public function bodega($nombre) 
    {
        $bodega = Bodega::where('nombre', $nombre)
        ->first();
        $view =  \View::make('pdf.detalleBodega', compact('bodega'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('detalleBodega');
    }

    public function getData() 
    {
        $data =  [
            'quantity'      => '1' ,
            'description'   => 'some ramdom text',
            'price'   => '500',
            'total'     => '500'
        ];
        return $data;
    }
}
