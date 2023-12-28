<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnexosModel;
use Illuminate\Support\Facades\Storage;


class AnexoController extends Controller
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
           try {

                $Anexo = new AnexosModel();
                $name_pdf1 = '';
                if ($request->file('Representacion')){
                    $pdf = $request->file('Representacion');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf1 = 'Representacion'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf1, file_get_contents($pdf));
                }
                $Anexo->Representacion = $name_pdf1;
                $name_pdf2 = '';
                if ($request->file('Rut')){
                    $pdf = $request->file('Rut');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf2 = 'Rut'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf2, file_get_contents($pdf));
                }
                $Anexo->Rut = $name_pdf2;
                $name_pdf3 = '';
                if ($request->file('Declaracion')){
                    $pdf = $request->file('Declaracion');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf3 = 'Declaracion'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf3, file_get_contents($pdf));
                }
                $Anexo->Declaracion = $name_pdf3;
                $name_pdf4 = '';
                if ($request->file('Bancaria')){
                    $pdf = $request->file('Bancaria');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf4 = 'Bancaria'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf4, file_get_contents($pdf));
                }
                $Anexo->Bancaria = $name_pdf4;
                $name_pdf5 = '';
                if ($request->file('Financieros')){
                    $pdf = $request->file('Financieros');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf5 = 'Financieros'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf5, file_get_contents($pdf));
                }
                $Anexo->Financieros = $name_pdf5;
                $name_pdf6 = '';
                if ($request->file('CertificacionOEA')){
                    $pdf = $request->file('CertificacionOEA');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf6 = 'CertificacionOEA'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf6, file_get_contents($pdf));
                }
                $Anexo->CertificacionOEA = $name_pdf6;
                $name_pdf7 = '';
                if ($request->file('CertificadoBasc')){
                    $pdf = $request->file('CertificadoBasc');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf7 = 'CertificadoBasc'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf7, file_get_contents($pdf));
                }
                $Anexo->CertificadoBasc = $name_pdf7;
                $name_pdf8 = '';
                if ($request->file('Anexo')){
                    $pdf = $request->file('Anexo');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf8 = 'Anexo'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf8, file_get_contents($pdf));
                }
                $Anexo->Anexo = $name_pdf8;
                $name_pdf9 = '';
                if ($request->file('ConflitoInteres')){
                    $pdf = $request->file('ConflitoInteres');
                    $ext = $pdf->getClientOriginalExtension();
                    $name_pdf9 = 'ConflitoInteres'.'_'.date('Y').'-'.date('m').'-'.date('d').'-'.uniqid().'.'.$ext;
                    $url = Storage::disk('documentos')->put($name_pdf9, file_get_contents($pdf));
                }
                $Anexo->ConflitoInteres = $name_pdf9;

                $Anexo->UsuarioID = $id;

            if ($Anexo->save()) {
                return redirect('/');

            }else{

                return back();
            }




            //return redirect('/actividad/');
            } catch (\Throwable $th) {
                throw $th;
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
