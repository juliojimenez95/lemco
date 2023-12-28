<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\ActividadEconomicaModel;
use App\Models\RepresentanteModel;
use App\Models\FirmaModel;
use App\Models\AccionistaModel;
use App\Models\EntidadFModel;
use App\Models\EntidadesModel;


use Illuminate\Support\Facades\DB;



class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('cliente.cliente');
    }

    public function accionista($id)
    {
        $accionistas = AccionistaModel::where('UsuarioID', $id)->get();
       // return $accionistas;
        return view('cliente.accionista',["id"=>$id,'accionistas'=>$accionistas]);
    }

    public function declaracion($id)
    {
        return view('cliente.declaracion',["id"=>$id]);
    }

    public function financiera($id)
    {
        return view('cliente.financiera',["id"=>$id]);
    }

    public function entidadesf($id)
    {
        $entidades = EntidadesModel::where('UsuarioID', $id)->get();
        $user = UserModel::where('ID', $id)->first();

        
        return view('cliente.entidadesf',["id"=>$id,"entidades"=>$entidades,"user"=>$user]);
    }

    public function contactos($id)
    {
        return view('cliente.contactos',["id"=>$id]);
    }
    public function fondos($id)
    {
        return view('cliente.fondos',["id"=>$id]);
    }
    public function autorizacion($id)
    {
        return view('cliente.autorizacion',["id"=>$id]);
    }
    
    public function reporter($id)
    {
        return view('cliente.reporter',["id"=>$id]);
    }

    public function firma($id)
    {
        return view('cliente.firma',["id"=>$id]);
    }


    public function anexo($id)
    {
        return view('cliente.anexo',["id"=>$id]);
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
    public function storefirma(Request $request,$id)
    {
        // Validación de los datos enviados por el formulario
        $request->validate([
            'UsuarioID' => 'required|exists:usuarios,ID', // Asegura que exista el usuario asociado
            'Nombre' => 'required|string|max:150',
            'Tidentificacion' => 'required|string|max:50',
            'Identificacion' => 'required|string|max:50',
            'Firma' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta la validación según tus necesidades
        ]);

        // Procesamiento de la imagen de la firma
        $firmaImagen = $request->file('Firma');
        $firmaNombre = time() . '.' . $firmaImagen->getClientOriginalExtension();
        $firmaRuta = public_path('ruta/a/tu/directorio/firmas/' . $firmaNombre);
        // Asegúrate de crear el directorio 'firmas' en la ruta especificada

        // Guardar la firma en la carpeta
        $firmaImagen->move('ruta/a/tu/directorio/firmas/', $firmaNombre);

        // Crear nueva firma en la base de datos
        $firma = FirmaModel::create([
            'UsuarioID' => $id,
            'Nombre' => $request->input('Nombre'),
            'Tidentificacion' => $request->input('Tidentificacion'),
            'Identificacion' => $request->input('Identificacion'),
            'Firma' => $firmaRuta, // Almacena la ruta de la firma en la base de datos
        ]);

        // Puedes redirigir a la vista de detalle de la firma o a donde desees
        return redirect('accionista/'.$id);
    }
    public function store(Request $request)
    {
        // Validación de los datos enviados por el formulario
        $request->validate([
            'Empresa' => 'required|string|max:150',
            'Tvinculacion' => 'required|string|max:50',
            'Tpersona' => 'required|string|max:50',
            'Origen_empresa' => 'required|string|max:150',
            'Nombre' => 'required|string|max:255',
            'Tipo_identificacion' => 'required|string|max:50',
            'Identificacion' => 'required|string|max:150', // Asegura que sea único en la tabla usuarios
            'Direccion' => 'required|string|max:150',
            'Telefono' => 'required|string|max:50',
            'Nombrer' => 'required|string|max:150',
            'Nacionalidadr' => 'required|string|max:150',
            'Tidentificacionr' => 'required|string|max:50',
            'identificacionr' => 'required|string|max:150', // Asegura que sea único en la tabla representantes
            'Telefonor' => 'required|string|max:20',
            'Emailr' => 'required|email|max:150',
            'TributaEEUU' => 'required',
            'CIIU' => 'required|string|max:150',
            'TEmpresa' => 'required|string|max:50',
            'TRegimen' => 'required|string|max:50',
            'ActivosVirtuales' => 'required',
        ]);

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
                'Rol' => 1,
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
            return redirect('accionista/'.$usuario->ID);


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
