<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AccionistaModel;

class AccionistaController extends Controller
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
        $request->validate([ // Asegura que exista el usuario asociado
            'Nombre' => 'required|string|max:150',
            'Participacion' => 'required|numeric|between:0,100', // Porcentaje de participación
            'Tidentificacion' => 'required|string|max:50',
            'Identificacion' => 'required|string|max:150|unique:accionistas', // Asegura que sea único en la tabla accionistas
            'Nacionalidad' => 'required|string|max:150',
        ]);

        // Crear un nuevo accionista en la base de datos
        $accionista = AccionistaModel::create([
            'UsuarioID' => $id,
            'Nombre' => $request->input('Nombre'),
            'Participacion' => $request->input('Participacion'),
            'Tidentificacion' => $request->input('Tidentificacion'),
            'Identificacion' => $request->input('Identificacion'),
            'Nacionalidad' => $request->input('Nacionalidad'),
        ]);

        // Puedes redirigir a la vista de detalle del accionista o a donde desees
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
