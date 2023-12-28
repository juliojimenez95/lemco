<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FirmaModel;


class FirmaController extends Controller
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
        // Validar los datos del formulario si es necesario
       /* $request->validate([
            'Nombre' => 'required',
            'Tidentificacion' => 'required',
            'Identificacion' => 'required',
            'Firma' => 'required',
        ]);*/

        // Crear un nuevo usuario con los datos del formulario
        $usuario = FirmaModel::create([
            'UsuarioID' => $id,
            'Nombre' => $request->input('Nombre'),
            'Tidentificacion' => $request->input('Tidentificacion'),
            'Identificacion' => $request->input('Identificacion'),
           // 'Firma' => $request->input('Firma'),
        ]);

        // Puedes devolver una respuesta, redireccionar, etc.
        return redirect('anexo/'.$id);
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
