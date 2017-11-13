<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Redirect;  
use Illuminate\Support\Facade\Input;
use App\Http\Requests\PedidoFormRequest;
use App\Pedido;
use App\DetallePedido;
use App\Producto;
use Carbon\Carbon;
use DB;

class PedidoControlador extends Controller
{
        /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
 		$pedidos = Pedido::all();
        return view("pedidos.index", ["pedidos" => $pedidos]);
    	/*if ($request) 
    	{
	        $query = trim($request->get('searchText'));
	        $pedidos=DB::table('pedidos as p')
	          ->join('pedidos_detalle as pd', 'p.id_pedido', '=', 'pd.id_pedido')
	          ->select('p.id_pedido', 'p.num_pedido', 'p.cliente', 'p.total', 'p.fecha')	
    	    return view("pedidos.index", ["pedidos" => $pedidos]);

    	}*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //aca falta agregar el cliente, pero vamos a meterle cualquier cosa,
        //posibiliad de que el pedido sea sin registro del cliente, que cualquiera que ingrese
        //a la app pueda hacer pedidos (?)
        $pedidos = new Pedido;
        $productos = DB::table('productos as p')
         ->select(DB::raw('CONCAT(p.id, " ", p.nomb_producto) AS producto'), 'p.id as id_producto')
         ->get();
        $clientes = DB::table('clientes as p')
         ->select(DB::raw('CONCAT(p.cedula, " ", p.nombre, " ", p.apellido) AS cliente'), 'p.id')
         ->get(); 
        return view("pedidos.create", ["pedidos" => $pedidos, "productos" => $productos, "clientes" => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PedidoFormRequest $request)
    {
        try { 
                $pedido = new Pedido;
		        $pedido->num_pedido = $request->get('num_pedido');
        		$pedido->cliente = $request->get('cliente');
        		$pedido->fecha = date("Y-m-d", strtotime($request->get('fecha')));
        		$pedido->estado = 'A';
                $pedido->total = 0;
                $pedido-> save();
				
				$id_producto = $request->get('id_producto');
        		$cantidad = $request->get('cantidad');
				$precio_unitario = $request->get('precio_unitario');
                $subtotal = $request->get('subtotal');
       		
        		$cont = 0;
                $total_cabecera=0;


				/*
				 'nro_detalle',
    			 'id_producto',
    			 'precio_unitario',
    			 'cantidad',
    			 'subtotal'
				*/
                while ($cont < count($id_producto)) {
                    $detalle = new DetallePedido;
                    $detalle->id_pedido = $pedido->id_pedido;
                    $detalle->id_producto = $id_producto[$cont];
                    $detalle->precio_unitario = $precio_unitario[$cont];
                    $detalle->cantidad = $cantidad[$cont];
                    $detalle->subtotal = $precio_unitario[$cont]*$cantidad[$cont];
                    $total_cabecera = $total_cabecera +  ($precio_unitario[$cont]*$cantidad[$cont]);                    
                    
                    $detalle->save(); 

                    $cont=$cont+1;


                }

                $pedido = Pedido::findOrFail($pedido->id_pedido);
                $pedido->total= $total_cabecera ;
                $Pedido->update(); 	
				/* 
		        if($producto->save()){
		            return redirect("/productos");
		        }else{
		            return view("productos.create", ["producto" => $producto]);
		        }
		        */	
        
        } catch (Exception $e) {
        	
        }

        return redirect("/pedidos");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pedidos = DB::table('pedidos as p')
            ->join('cliente as c', 'p.cliente', '=', 'c.id')
            ->join('`pedidos_detalle as d', 'p.id_pedido', '=', 'd.id_pedido')
            ->select('p.id_pedido', 'p.fecha', 'c.nomnbre', 'p.num_pedido', 'p.estado')
            ->where('p.id_pedido', '=',$id);

        return view("pedidos.show", ["pedidos" => $pedidos, "detalles" => $detalles]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pedidos = Pedido::find($id);
        return view("pedidos.edit", ["pedidos" => $pedidos]);
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

        $pedido = Pedido::findOrFail($id);
        $pedido->estado='C';
        $Pedido->update(); 
        return redirect('/pedidos');

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pedido::destroy($id);
        return redirect('/pedidos');

    }
}
