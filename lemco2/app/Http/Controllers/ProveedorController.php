<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\ActividadEconomicaModel;
use App\Models\RepresentanteModel;
use App\Models\ClienteModel;


class ProveedorController extends Controller
{

    public function store(Request $request)
    {
        // Validación de los datos enviados por el formulario
       /* $request->validate([
            'Empresa' => 'required|string|max:150',
            'Tvinculacion' => 'required|string|max:50',
            'Tpersona' => 'required|string|max:50',
            'Origen_empresa' => 'required|string|max:150',
            'Nombre' => 'required|string|max:255',
            'Tipo_identificacion' => 'required|string|max:50',
            'Identificacion' => 'required|string|max:150', // Asegura que sea único en la tabla usuarios
            'Direccion' => 'required|string|max:150',
            'Telefono' => 'required|string|max:50',
            'Pagina_web' => 'required|string|max:150',
            'Rol' => 'required|integer',
            'Nombrer' => 'required|string|max:150',
            'Nacionalidadr' => 'required|string|max:150',
            'Tidentificacionr' => 'required|string|max:50',
            'identificacionr' => 'required|string|max:150', // Asegura que sea único en la tabla representantes
            'Telefonor' => 'required|string|max:20',
            'Emailr' => 'required|email|max:150',
            'TributaEEUU' => 'required|boolean',
            'CIIU' => 'required|string|max:150',
            'TEmpresa' => 'required|string|max:50',
            'Cuales1' => 'nullable|string|max:150',
            'TRegimen' => 'required|string|max:50',
            'ActivosVirtuales' => 'required|boolean',
            'Cuales2' => 'nullable|string|max:150',
        ]);*/

        try {
            // Crear un nuevo usuario en la base de datos
            $usuario = UserModel::create([
                'Empresa' => $request->input('Empresa'),
                'Tvinculacion' => $request->input('Tvinculacion'),
                'Tpersona' => $request->input('Tpersona'),
                'Origen_empresa' => $request->input('Origen_empresa'),
                'Nombre' => $request->input('Nombre'),
                'Tipo_identificacion' => $request->input('Tipo_identificacion'),
                'Identificacion' => $request->input('Identificacion'),
                'Direccion' => $request->input('Direccion'),
                'Telefono' => $request->input('Telefono'),
                'Pagina_web' => $request->input('Pagina_web'),
                'Rol' => 2,
            ]);
        
            $representante = RepresentanteModel::create([
                'UsuarioID' => $usuario->ID,
                'Nombre' => $request->input('Nombrer'),
                'Nacionalidad' => $request->input('Nacionalidadr'),
                'Tidentificacion' => $request->input('Tidentificacionr'),
                'identificacion' => $request->input('identificacionr'),
                'Telefono' => $request->input('Telefonor'),
                'Email' => $request->input('Emailr'),
            ]);
        
            $actividadEconomica = ActividadEconomicaModel::create([
                'UsuarioID' => $usuario->ID,
                'TributaEEUU' => $request->input('TributaEEUU'),
                'CIIU' => $request->input('CIIU'),
                'TEmpresa' => $request->input('TEmpresa'),
                'Cuales1' => $request->input('Cuales1'),
                'TRegimen' => $request->input('TRegimen'),
                'ActivosVirtuales' => $request->input('ActivosVirtuales'),
                'Cuales2' => $request->input('Cuales2'),
            ]);
        
            // Puedes redirigir a la vista de detalle del usuario o a donde desees "/accionista"
            return   redirect('accionista/'.$usuario->ID);
        } catch (QueryException $exception) {
            // Manejar la excepción (por ejemplo, loguearla o mostrar un mensaje de error)
            return response()->json(['error' => 'Error al crear el usuario: ' . $exception->getMessage()], 500);
        }
    }
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

    public function entidadesf()
    {
        return view('proveedore.entidadesf');
    }

    public function entidades($id)
    {
        return view('proveedore.entidades',["id"=>$id]);
    }

    public function clientes($id)
    {
        $clientes = ClienteModel::where('UsuarioID', $id)->get();

        return view('proveedore.clientes',["id"=>$id,"clientes"=>$clientes]);
    }

    public function contactos($id)
    {
        return view('proveedore.contactos',["id"=>$id]);
    }

    public function fondos($id)
    {
        return view('proveedore.fondos',["id"=>$id]);
    }
    public function autorizacion($id)
    {
        return view('proveedore.autorizacion',["id"=>$id]);
    }
    
    public function reporter($id)
    {
        return view('proveedore.reporter',["id"=>$id]);
    }

    public function firma($id)
    {
        return view('proveedore.firma',["id"=>$id]);
    }
}
