<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Categoria;

class CategoriasControlador2 extends Controller
{
    function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index2', ["categorias" => $categorias]);
    }
}