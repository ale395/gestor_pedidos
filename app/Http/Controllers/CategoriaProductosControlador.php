<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CategoriaProducto;

class CategoriaProductosControlador extends Controller
{
    public function index()
    {
        $categorias = CategoriaProducto::all();
        return view("productos.form", compact('categorias'));
    }
}
