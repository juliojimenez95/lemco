<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\INFORMACION_FINANCIERAModel;


class InformacionFController extends Controller
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
            'Capital' => 'required|numeric',
            'Pasivos' => 'required|numeric',
            'Activos' => 'required|numeric',
            'IngresosMensuales' => 'required|numeric',
            'EgresosMensuales' => 'required|numeric',
            'ConceptoIngresosNoOperacionales' => 'nullable|string|max:150',
            'IngresosNoOperacionales' => 'required|numeric',
            'TOperaciones' => 'nullable|string|max:150',
            'Cuales1' => 'nullable|string|max:150',
            'ProductosME' => 'nullable|string|max:150',
            'Cuales2' => 'nullable|string|max:150',
        ]);

        // Crear una nueva información financiera en la base de datos
        $informacionFinanciera = INFORMACION_FINANCIERAModel::create([
            'UsuarioID' => $id,
            'Capital' => $request->input('Capital'),
            'Pasivos' => $request->input('Pasivos'),
            'Activos' => $request->input('Activos'),
            'IngresosMensuales' => $request->input('IngresosMensuales'),
            'EgresosMensuales' => $request->input('EgresosMensuales'),
            'ConceptoIngresosNoOperacionales' => $request->input('ConceptoIngresosNoOperacionales'),
            'IngresosNoOperacionales' => $request->input('IngresosNoOperacionales'),
            'MonedaExt' => $request->input('MonedaExt'),
            'TOperaciones' => $request->input('TOperaciones'),
            'Cuales1' => $request->input('Cuales1'),
            'ProductosME' => $request->input('ProductosME'),
            'Cuales2' => $request->input('Cuales2'),
        ]);

        // Puedes redirigir a la vista de detalle de la información financiera o a donde desees
        return redirect('entidadesf/'.$id);

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
