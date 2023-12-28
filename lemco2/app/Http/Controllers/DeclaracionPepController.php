<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DeclaracionPepModel;

class DeclaracionPepController extends Controller
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
        /*$request->validate([ 
            'Recursosp' => 'required|boolean',
            'Quien1' => 'nullable|string|max:150',
            'Anexo1' => 'nullable|string|max:255',
            'Poderp' => 'required|boolean',
            'Quien2' => 'nullable|string|max:150',
            'Anexo2' => 'nullable|string|max:255',
            'Reconocimiento' => 'required|boolean',
            'Quien3' => 'nullable|string|max:150',
            'Anexo3' => 'nullable|string|max:255',
            'PEPOrganizacioni' => 'required|boolean',
            'Quien4' => 'nullable|string|max:150',
            'Anexo4' => 'nullable|string|max:255',
            'PEPextranjero' => 'required|boolean',
            'Quien5' => 'nullable|string|max:150',
            'Anexo5' => 'nullable|string|max:255',
        ]);*/
        try {
        // Crear una nueva declaración PEP en la base de datos
        $declaracionPep = DeclaracionPepModel::create([
            'UsuarioID' => $id,
            'Recursosp' => $request->input('Recursosp'),
            'Quien1' => $request->input('Quien1'),
            'Anexo1' => $request->input('Anexo1'),
            'Poderp' => $request->input('Poderp'),
            'Quien2' => $request->input('Quien2'),
            'Anexo2' => $request->input('Anexo2'),
            'Reconocimiento' => $request->input('Reconocimiento'),
            'Quien3' => $request->input('Quien3'),
            'Anexo3' => $request->input('Anexo3'),
            'PEPOrganizacioni' => $request->input('PEPOrganizacioni'),
            'Quien4' => $request->input('Quien4'),
            'Anexo4' => $request->input('Anexo4'),
            'PEPextranjero' => $request->input('PEPextranjero'),
            'Quien5' => $request->input('Quien5'),
            'Anexo5' => $request->input('Anexo5'),
        ]);

        // Puedes redirigir a la vista de detalle de la declaración PEP o a donde desees
         return redirect('financiera/'.$id);

        } catch (QueryException $exception) {
            // Manejar la excepción (por ejemplo, loguearla o mostrar un mensaje de error)
            return response()->json(['error' => 'Error al crear el usuario: ' . $exception->getMessage()], 500);
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
