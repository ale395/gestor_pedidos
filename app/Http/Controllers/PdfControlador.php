<?php

/*
El controlador del visualizador de PDF!!!!
*/



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Dompdf\Dompdf;
use App\Pedido;

class PdfControlador extends Controller
{

	 /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("pdf.reportes");

    }



    public function crearPDF($datos, $vistaurl, $tipo)     
    {
    /*
	* Función que crea el pdf.
	* tipo 1 = Visualizamos el pdf en pantalla.
	* tipo 2 = Descargamos el pdf.
    */	
    	$data = $datos;
    	$view = \View::make($vistaurl, compact('data'));
    	$pdf = \App::make('dompdf.wrapper');
    	$pdf->loadHTML($view);
    	$pdf->setPaper('A4');

    	if ($tipo == 1) {return $pdf->stream('listadopedidos.pdf');}
    	if ($tipo == 2) {return $pdf->download('listadopedidos.pdf');}	
    }

    //a partir de aca, creamos las consultas para los reportes, 
    //que luego vamos a enviar a crearPDF
	public function crear_reporte_pedidos ($tipo) 
	{
		//el nombre de la vista
		$vistaurl="pdf.listadopedidos";
		//seleccionamos los datos
		$pedidos = Pedido::all();

		//retornamos el reporte, dependiendo del tipo,
		//o visualizamos en pantalla, o descargamos el pdf tekaka.
		return $this->crearPDF($pedidos, $vistaurl, $tipo);

	}




}
