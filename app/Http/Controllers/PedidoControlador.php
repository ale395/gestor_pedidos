<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Redirect;  
use Illuminate\Support\Facade\Input;
use App\Http\Request\PedidoFormRequest;
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
         ->select(DB::raw('CONCAT(p.id, " ", p.nomb_producto) AS Producto'), 'p.id')
         ->get();
        return view("pedidos.create", ["pedidos" => $pedidos, "productos" => $productos]);
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
		        $pedido ->id_pedido = $request->get('id_pedido');
        		$pedido ->cliente = $request->get('cliente');

        		$mytime = Carbon::now(America/Argentina);
        		$pedido -> fecha = $mytime->toDateTimeString();
        		$pedido -> save()
				
				$id_producto = $request->get('id_producto');
        		$cantidad = $request->get('cantidad');
				$precio_unitario ->= $request->get('precio_unitario');
        		$pedido ->cliente = $request->get('cliente');

        		$cont = 0;


				/*
				 'nro_detalle',
    			 'id_producto',
    			 'precio_unitario',
    			 'cantidad',
    			 'subtotal'

				*/
        		while ( $cont < count($id_producto)) {
        				$detalle = new DetallePedido;
				        $detalle->id_pedido = $pedido->id_pedido;
        				$detalle->id_producto = $id_producto[$con$t];
        				$detalle->precio_unitario = $precio_unitario[$cont];
        				$detalle->cantidad = $cantidad[$cont];
        				$detalle->save(); 

        				$cont=$cont+1;
        			}	
				/* 
		        if($producto->save()){
		            return redirect("/productos");
		        }else{
		            return view("productos.create", ["producto" => $producto]);
		        }
		        */	
        
        } catch (Exception $e) {
        	
        }

        return redirect("/pedido")

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
        $producto = Producto::find($id);
        return view("productos.edit", ["producto" => $producto]);
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
        $producto = Producto::find($id);

        $producto->nomb_producto = $request->nomb_producto;
        $producto->precio_unitario = $request->precio_unitario;
        $producto->id_categoria = $request->id_categoria;
        $producto->estado = $request->estado;

        if($producto->save()){
            return redirect("/productos");
        }else{
            return view("productos.edit", ["producto" => $producto]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect('/productos');
    }
}
