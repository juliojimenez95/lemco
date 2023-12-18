<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    public function index()
    {
        return view('proveedore.proveedor');
    }

    public function accionista()
    {
        return view('proveedore.accionista');
    }

    public function declaracion()
    {
        return view('proveedore.declaracion');
    }

    public function financiera()
    {
        return view('proveedore.financiera');
    }

    public function entidades()
    {
        return view('proveedore.entidades');
    }

    public function clientes()
    {
        return view('proveedore.clientes');
    }

    public function contactos()
    {
        return view('proveedore.contactos');
    }

    public function fondos()
    {
        return view('proveedore.fondos');
    }
    public function autorizacion()
    {
        return view('proveedore.autorizacion');
    }
    
    public function reporter()
    {
        return view('proveedore.reporter');
    }

    public function firma()
    {
        return view('proveedore.firma');
    }
}
