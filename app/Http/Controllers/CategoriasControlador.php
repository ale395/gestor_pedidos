<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class CategoriasControlador extends Controller
{
    function index()
    {
        $categorias = Categoria::all();
        return view('productos.form', compact('categorias'));
    }

    public function create()
    {
        
        $categoria = new Categoria;
        return view("productos.form", ["categoria" => $categoria]);
    }
}
