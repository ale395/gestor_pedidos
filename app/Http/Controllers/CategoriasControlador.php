<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

use App\Http\Requests\CrearCategoriasRequest;

class CategoriasControlador extends Controller
{
    function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    /**public function create()
    {
        $categoria = new Categoria;
        return view("productos.form", ["categoria" => $categoria]);
    }**/


    public function create()
    {
        $categoria = new Categoria;
        return view("categorias.create", ["categoria" => $categoria]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CrearCategoriasRequest $request)
    {
        $categoria = new Categoria;

        $categoria->nomb_categoria = $request->nomb_categoria;

        if($categoria->save()){
            return redirect("/categorias");
        }else{
            return view("categorias.create", ["categoria" => $categoria]);
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
        $categoria = Categoria::find($id);
        return view("categorias.edit", ["categoria" => $categoria]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CrearCategoriasRequest $request, $id)
    {
        $categoria = Categoria::find($id);

        $categoria->nomb_categoria = $request->nomb_categoria;

        if($categoria->save()){
            return redirect("/categorias");
        }else{
            return view("categorias.edit", ["categoria" => $categoria]);
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
        Categoria::destroy($id);
        return redirect('/categorias');
    }
}