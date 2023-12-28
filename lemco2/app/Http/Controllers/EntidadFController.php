<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EntidadFModel;

class EntidadFController extends Controller
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
    {
        // Validación de los datos enviados por el formulario
       /* $request->validate([ // Asegura que exista el usuario asociado
            'Entidad' => 'required|string|max:150',
            'Pais' => 'required|string|max:150',
            'Ciudad' => 'required|string|max:150',
            'Tproducto' => 'required|string|max:50',
            'Cuenta' => 'required|string|max:150',
            'Correo' => 'required|email|max:150',
            'Certificado' => 'required|string|max:150',
        ]);*/

        // Crear nueva entidad en la base de datos
        $entidad = EntidadFModel::create([
            'UsuarioID' => $id,
            'Entidad' => $request->input('Entidad'),
            'Pais' => $request->input('Pais'),
            'Ciudad' => $request->input('Ciudad'),
            'Tproducto' => $request->input('Tproducto'),
            'Cuenta' => $request->input('Cuenta'),
            'Correo' => $request->input('Correo'),
            'Certificado' => $request->input('Certificado'),
        ]);
        // Puedes redirigir a la vista de detalle de la entidad o a donde desees
        return redirect('proveedore/clientes/'.$id);
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
