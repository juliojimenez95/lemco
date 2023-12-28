<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConflictoIModel;

class ConflictoIController extends Controller
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
            'Parentesco' => 'required|boolean',
            'Regalos' => 'required|boolean',
            'SituacionA' => 'required|boolean',
        ]);

        // Crear nueva entrada de Conflicto de Intereses en la base de datos
        $conflictoIntereses = ConflictoIModel::create([
            'UsuarioID' => $id,
            'Parentesco' => $request->input('Parentesco'),
            'Regalos' => $request->input('Regalos'),
            'SituacionA' => $request->input('SituacionA'),
        ]);  

        // Puedes redirigir a la vista de detalle de Conflicto de Intereses o a donde desees
        return redirect('accionista/'.$id);
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
