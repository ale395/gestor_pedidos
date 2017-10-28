<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

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
        return view("productos.index", ["producto" => $producto]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $producto = new Producto;
        return view("productos.create", ["producto" => $producto]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;

        $producto->nomb_producto = $request->nomb_producto;
        $producto->precio_unitario = $request->precio_unitario;
        $producto->id_categoria = $request->id_categoria;
        $producto->estado = $request->estado;

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
