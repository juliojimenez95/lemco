<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactoModel;

class ContactoController extends Controller
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
        // Validar la solicitud
        /*$request->validate([
            'CorreoFE' => 'required|email',
            'CargoFE' => 'required|string',
            'NombreFE' => 'required|string',
            'Email' => 'required|email',
            'TelefonoFE' => 'required|string',
            'FechaCierre' => 'required|date', // Ajusta la regla según el tipo de dato
            'ContactoCo' => 'required|string',
            'TelefonoCo' => 'required|string',
            'CargoCo' => 'required|string',
            'CelularCo' => 'required|string',
            'CorreoCo' => 'required|email',
            'ContactoCa' => 'required|string',
            'TelefonoCa' => 'required|string',
            'CargoCa' => 'required|string',
            'CelularCa' => 'required|string',
            'CorreoCa' => 'required|email',
            'ContactoF' => 'required|string',
            'TelefonoF' => 'required|string',
            'CargoF' => 'required|string',
            'CelularF' => 'required|string',
            'CorreoF' => 'required|email',
        ]);*/

        // Crear un nuevo contacto
        $contacto = ContactoModel::create([
            'UsuarioID' => $id,
            'CorreoFE' => $request->input('CorreoFE'),
            'CargoFE' => $request->input('CargoFE'),
            'NombreFE' => $request->input('NombreFE'),
            'Email' => $request->input('Email'),
            'TelefonoFE' => $request->input('TelefonoFE'),
            'FechaCierre' => $request->input('FechaCierre'),
            'ContactoCo' => $request->input('ContactoCo'),
            'TelefonoCo' => $request->input('TelefonoCo'),
            'CargoCo' => $request->input('CargoCo'),
            'CelularCo' => $request->input('CelularCo'),
            'CorreoCo' => $request->input('CorreoCo'),
            'ContactoCa' => $request->input('ContactoCa'),
            'TelefonoCa' => $request->input('TelefonoCa'),
            'CargoCa' => $request->input('CargoCa'),
            'CelularCa' => $request->input('CelularCa'),
            'CorreoCa' => $request->input('CorreoCa'),
            'ContactoF' => $request->input('ContactoF'),
            'TelefonoF' => $request->input('TelefonoF'),
            'CargoF' => $request->input('CargoF'),
            'CelularF' => $request->input('CelularF'),
            'CorreoF' => $request->input('CorreoF'),
        ]);

        // Puedes redirigir a la vista de detalle del contacto o a donde desees
        return redirect('fondos/'.$id);
    }

    public function store2(Request $request,$id)
    {
        // Validar la solicitud
        /*$request->validate([
            'CorreoFE' => 'required|email',
            'CargoFE' => 'required|string',
            'NombreFE' => 'required|string',
            'Email' => 'required|email',
            'TelefonoFE' => 'required|string',
            'FechaCierre' => 'required|date', // Ajusta la regla según el tipo de dato
            'ContactoCo' => 'required|string',
            'TelefonoCo' => 'required|string',
            'CargoCo' => 'required|string',
            'CelularCo' => 'required|string',
            'CorreoCo' => 'required|email',
            'ContactoCa' => 'required|string',
            'TelefonoCa' => 'required|string',
            'CargoCa' => 'required|string',
            'CelularCa' => 'required|string',
            'CorreoCa' => 'required|email',
            'ContactoF' => 'required|string',
            'TelefonoF' => 'required|string',
            'CargoF' => 'required|string',
            'CelularF' => 'required|string',
            'CorreoF' => 'required|email',
        ]);*/

        // Crear un nuevo contacto
        $contacto = ContactoModel::create([
            'UsuarioID' => $id,
            'ContactoCo' => $request->input('ContactoCo'),
            'TelefonoCo' => $request->input('TelefonoCo'),
            'CargoCo' => $request->input('CargoCo'),
            'CelularCo' => $request->input('CelularCo'),
            'CorreoCo' => $request->input('CorreoCo'),
            'ContactoCa' => $request->input('ContactoCa'),
            'TelefonoCa' => $request->input('TelefonoCa'),
            'CargoCa' => $request->input('CargoCa'),
            'CelularCa' => $request->input('CelularCa'),
            'CorreoCa' => $request->input('CorreoCa'),
            'ContactoF' => $request->input('ContactoF'),
            'TelefonoF' => $request->input('TelefonoF'),
            'CargoF' => $request->input('CargoF'),
            'CelularF' => $request->input('CelularF'),
            'CorreoF' => $request->input('CorreoF'),
        ]);

        // Puedes redirigir a la vista de detalle del contacto o a donde desees
        return redirect('/proveedore/fondos/'.$id);
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
