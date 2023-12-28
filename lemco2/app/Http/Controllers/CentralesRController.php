<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CentralesRModel;
use App\Models\ConflictoIModel;


class CentralesRController extends Controller
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
        $request->validate([
            'Respuesta' => 'required',
            'Parentesco' => 'required', // Ajusta según el tipo de dato
            'Regalos' => 'required', // Ajusta según el tipo de dato
            'SituacionA' => 'required', // Ajusta según el tipo de dato
        ]);

        // Crear nueva entrada en Centrales de Riesgo en la base de datos
        $centralesRiesgo = CentralesRModel::create([
            'UsuarioID' => $id,
            'Respuesta' => $request->input('Respuesta'),
        ]);

        $conflictoIntereses = ConflictoIModel::create([
            'UsuarioID' => $id,
            'Parentesco' => $request->input('Parentesco'),
            'Regalos' => $request->input('Regalos'),
            'SituacionA' => $request->input('SituacionA'),
        ]);

        // Puedes redirigir a la vista de detalle de Centrales de Riesgo o a donde desees
        return redirect('firma/'.$id);
    }


    public function store2(Request $request,$id)
    {
        // Validación de los datos enviados por el formulario
        $request->validate([
            'Parentesco' => 'required', // Ajusta según el tipo de dato
            'Regalos' => 'required', // Ajusta según el tipo de dato
            'SituacionA' => 'required', // Ajusta según el tipo de dato
        ]);

        $conflictoIntereses = ConflictoIModel::create([
            'UsuarioID' => $id,
            'Parentesco' => $request->input('Parentesco'),
            'Regalos' => $request->input('Regalos'),
            'SituacionA' => $request->input('SituacionA'),
        ]);

        // Puedes redirigir a la vista de detalle de Centrales de Riesgo o a donde desees
        return redirect('proveedore/firma/'.$id);
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
