<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Cliente;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CrearClientesRequest;
use Barryvdh\DomPDF\Facade as PDF;

class ClientesControlador extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $clientes = Cliente::all();
        return view("clientes.index", ["clientes" => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = new Cliente;
        return view("clientes.create", ["clientes" => $clientes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(CrearClientesRequest $request)
    {
               $clientes = new Cliente;

        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->cedula = $request->cedula;
        $clientes->telefono = $request->telefono;
        $clientes->direccion = $request->direccion;
        $clientes->correo = $request->correo;
        if($clientes->save()){
            return redirect("/clientes");
        }else{
            return view("clientes.create", ["clientes" => $clientes]);
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
            $clientes = Cliente::find($id);
        return view("clientes.edit", ["clientes" => $clientes]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    

    public function update(CrearClientesRequest $request, $id)
    {
        
        $clientes = Cliente::find($id);
        $clientes->nombre = $request->nombre;
        $clientes->apellido = $request->apellido;
        $clientes->cedula = $request->cedula;
        $clientes->telefono = $request->telefono;
        $clientes->direccion = $request->direccion;
        $clientes->correo = $request->correo;
        if($clientes->save()){
            return redirect("/clientes");
        }else{
            return view("clientes.edit", ["clientes" => $clientes]);
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
        Cliente::destroy($id);
        return redirect('/clientes');
    }

    public function pdf()
    {
        $clientes = Cliente::all();
        $view = view('clientes.pdf', compact('clientes'));
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        return $pdf->stream('Listado_Clientes.pdf');
    }

    public function descargarPdf()
    {
        $clientes = Cliente::all();
        $pdf = PDF::loadView('clientes.pdf', compact('clientes'));
        return $pdf->download('Listado_Clientes.pdf');
    }
}
