<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClienteModel;


class ClientespController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    { // Validar la solicitud
       /* $request->validate([
            'Empresa' => 'required|string|max:150',
            'Cargo' => 'required|string|max:150',
            'Contacto' => 'required|string|max:150',
            'Telefono' => 'required|string|max:50',
            'Correo' => 'required|email|max:150',
        ]);*/

        // Crear un nuevo cliente
        $cliente = ClienteModel::create([
            'UsuarioID' => $id,
            'Empresa' => $request->input('Empresa'),
            'Cargo' => $request->input('Cargo'),
            'Contacto' => $request->input('Contacto'),
            'Telefono' => $request->input('Telefono'),
            'Correo' => $request->input('Correo'),
        ]);

        // Puedes redirigir a la vista de detalle del cliente o a donde desees
        return redirect()->back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
