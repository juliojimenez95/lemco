<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosPersonalesModel;
use App\Models\UserModel;



class DatosPersonalesController extends Controller
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
    public function store(Request $request, $id)
    {
        // Validación de los datos enviados por el formulario
        $request->validate([
            'Respuesta' => 'required|boolean',
        ]);

        // Crear un nuevo fondo en la base de datos
        $datos = DatosPersonalesModel::create([
            'UsuarioID' => $id,
            'Respuesta' => $request->input('Respuesta'),
        ]);

        $usuario = UserModel::where('ID', $id)->first();

        if ($usuario && $usuario->Rol == 2) {
            // Redirige a la vista correspondiente para el rol de proveedor
            return redirect('proveedore/reporter/'.$id);
        } else {
            // Redirige a la vista de detalle del fondo o a donde desees
            return redirect('reporter/'.$id);
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
