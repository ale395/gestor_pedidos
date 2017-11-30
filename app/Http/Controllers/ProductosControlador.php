<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

use App\Categoria;

use App\Http\Requests\CrearProductosRequest;
use Barryvdh\DomPDF\Facade as PDF;

class ProductosControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producto = Producto::all();
        $categorias = Categoria::all();
        return view("productos.index", compact("categorias"), ["producto" => $producto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $producto = new Producto;
        $categorias = Categoria::all();
        return view("productos.create", compact("categorias"), ["producto" => $producto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearProductosRequest $request)
    {
        $producto = new Producto;

        $producto->nomb_producto = $request->nomb_producto;
        $producto->precio_unitario = $request->precio_unitario;
        $producto->id_categoria = $request->id_categoria;

        if($producto->save()){
            return redirect("/productos");
        }else{
            return view("productos.create", ["producto" => $producto]);
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
        $producto = Producto::find($id);
        $categorias = Categoria::all();
        return view("productos.edit", compact("categorias"), ["producto" => $producto]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearProductosRequest $request, $id)
    {
        $producto = Producto::find($id);

        $producto->nomb_producto = $request->nomb_producto;
        $producto->precio_unitario = $request->precio_unitario;
        $producto->id_categoria = $request->id_categoria;

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

    public function pdf()
    {
        $productos = Producto::all();
        $view = view('productos.pdf', compact('productos'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Listado_Productos.pdf');
    }

    public function descargarPdf()
    {
        $productos = Producto::all();
        $pdf = PDF::loadView('productos.pdf', compact('productos'));
        return $pdf->download('Listado_Productos.pdf');
    }
}
