<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemco</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        body {
            background-color: #f8f9fa; /* Cambia el color de fondo según tu preferencia */
        }
        .container {
            margin-top: 50px;
        }
        .h1_cus {
            color: #003366; /* Color del texto para h1 */
        }
        .underline {
            background-color: #003366; /* Color del subrayado */
        }
        .mt-4 {
            margin-top: 1.5rem !important; /* Ajusta el margen superior según tu preferencia */
        }
        .mb-4 {
            margin-bottom: 1.5rem !important; /* Ajusta el margen inferior según tu preferencia */
        }
        .text-primary {
            color: #003366 !important; /* Color del texto primario */
        }
        .label-cus {
            color: #003366; /* Color del texto para label */
        }
    </style>
</head>
<body>
    <div class="container">
        <div>
        <a class="btn btn-success btn_cb_c" href="#"

                        style="margin-top: 25px;">
                        <i class="fa-solid fa-arrow-left"></i>
                        {{ __('Regresar') }}
                        </a>
        </div>
        <div class="text-center">
            <img src="https://formacion.lemco.co/pluginfile.php/1/theme_edly/main_logo/1694462261/logo%20lemco.png"   class=" my-4 img-fluid">
                    

        </div>
        
        <div class="card col-sm-12">
            <div class="card-body">
                <form action="{{ route('cliente.store') }}" method="post">
                @csrf
                <h2 class="text-center h1_cus">FORMATO VINCULACIÓN CLIENTES GRUPO LEMCO </h2>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Primera sección -->
                            <div class="form-group">
                            <label for="Empresa" class="label-cus">Empresa*</label>
                            <select class="form-control" id="Empresa" name="Empresa">
                                <option value="LEMCO S.A.S">LEMCO S.A.S</option>
                                <option value="CHALLENGER S.A.S">CHALLENGER S.A.S</option>
                                <option value="OPERADORA HABITEL S.A.S">OPERADORA HABITEL S.A.S</option>
                                <option value="HABITEL S.A.S">HABITEL S.A.S</option>
                                <option value="SKY FORWARDER SAS">SKY FORWARDER SAS</option>
                                <option value="SKY INDUSTRIAL S.A.S">SKY INDUSTRIAL S.A.S</option>
                                <option value="SKY LOGÍSTICA INTEGRAL S.A.S">SKY LOGÍSTICA INTEGRAL S.A.S</option>

                                </select>
                            </div>
                            <div class="col-sm-12">
                            <p class="label-cus">En este formulario se entenderá como Grupo Lemco una o varias de las anteriores Empresas, quien (es) en el momento que lo requieran podrán solicitar documentos adicionales para la relación comercial y/o contractual.
                                Si la información solicitada no procede, diligencie con la expresión N.A (no aplica).
                                * Campos obligatorios de diligenciamiento</p>
                            </div>
                        </div>

                    </div>

                    <!-- Línea separadora después de la primera sección -->
                    <hr class="underline under_s">
                    <h2 class="text-center h1_cus">REGISTRO DEL CLIENTE</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Primera sección -->
                            <div class="form-group">
                            <label for="Tvinculacion" class="label-cus">Tipo de vinculación*</label>
                            <select class="form-control" id="Tvinculacion" name="Tvinculacion">
                                <option value="Vinculacion">Vinculación</option>
                                <option value="Actualizacion">Actualización</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <label for="Tpersona" class="label-cus">Tipo de persona*</label>
                            <select class="form-control" id="Tpersona" name="Tpersona">
                                <option value="Natural">Natural</option>
                                <option value="Juridica">Jurídica</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Segunda sección -->
                            <div class="form-group">
                            <label for="Origen_empresa" class="label-cus">Origen de la empresa*</label>
                            <select class="form-control" id="Origen_empresa" name="Origen_empresa">
                                <option value="Nacional">Nacional</option>
                                <option value="Extranjera">Extranjera</option>
                            </select>
                        </div>
                        </div>
                    </div>

                    <!-- Línea separadora después de la primera sección -->
                    <hr class="underline under_s">

                    <!-- Título para la sección Identificación del Cliente -->
                    <h2 class="text-center h1_cus mt-4 mb-4">1. IDENTIFICACIÓN DEL CLIENTE </h2>

                    <!-- Tercera sección (campos adicionales para la Identificación del Cliente) -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="Nombre">Razón social o nombre (para persona natural)*</label>
                                <input type="text" class="form-control" id="Nombre" name="Nombre" >
                                @if ($errors->has('Nombre'))
                                <p class="text-danger">{{ $errors->first('Nombre') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="Identificacion">Número de identificación*</label>
                                <input type="text" class="form-control" id="Identificacion" name="Identificacion" >
                                @if ($errors->has('Identificacion'))
                                <p class="text-danger">{{ $errors->first('Identificacion') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="numeroIdentificacion">Domicilio (país - ciudad)*</label>
                                <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" >
                                @if ($errors->has('Identificacion'))
                                <p class="text-danger">{{ $errors->first('Identificacion') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="email">Correo electrónico*</label>
                                <input type="email" class="form-control" id="email" name="email" >
                                @if ($errors->has('email'))
                                <p class="text-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Tipo_identificacion" class="label-cus">Tipo de identificación*</label>
                                <select class="form-control" id="Tipo_identificacion" name="Tipo_identificacion">
                                    <option value="c.c">C.C. (Cédula de Ciudadanía)</option>
                                    <option value="c.e">C.E. (Cédula de Extranjería)</option>
                                    <option value="p.p">P.P. (Pasaporte)</option>
                                    <option value="Nit">Nit</option>
                                </select>

                                @if ($errors->has('Tipo_identificacion'))
                                <p class="text-danger">{{ $errors->first('Tipo_identificacion') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="Direccion">Dirección social*</label>
                                <input type="text" class="form-control" id="Direccion" name="Direccion" >
                                @if ($errors->has('Direccion'))
                                <p class="text-danger">{{ $errors->first('Direccion') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="Telefono">Teléfono*</label>
                                <input type="text" class="form-control" id="Telefono" name="Telefono" >
                                @if ($errors->has('Telefono'))
                                <p class="text-danger">{{ $errors->first('Telefono') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="Pagina_web">Página web</label>
                                <input type="text" class="form-control" id="Pagina_web" name="Pagina_web" >
                            </div>
                        </div>
                    </div>
                    <hr class="underline under_s">

                    <h2 class="text-center h1_cus mt-4 mb-4">2. REPRESENTANTE LEGAL (Sólo si es persona jurídica)</h2>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="Nombrer">Nombres y apellidos completos*</label>
                        <input type="text" class="form-control" id="Nombrer" name="Nombrer" >
                            @if ($errors->has('Nombrer'))
                                <p class="text-danger">{{ $errors->first('Nombrer') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="Tidentificacionr" class="label-cus">Tipo de identificación*</label>
                            <select class="form-control" id="Tidentificacionr" name="Tidentificacionr">
                                <option value="c.c">C.C. (Cédula de Ciudadanía)</option>
                                <option value="c.e">C.E. (Cédula de Extranjería)</option>
                                <option value="p.p">P.P. (Pasaporte)</option>
                            </select>
                            @if ($errors->has('Tidentificacionr'))
                                <p class="text-danger">{{ $errors->first('Tidentificacionr') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                        <label class="label-cus" for="Telefonor">Teléfono*</label>
                        <input type="text" class="form-control" id="Telefonor" name="Telefonor" >
                            @if ($errors->has('Telefonor'))
                                <p class="text-danger">{{ $errors->first('Telefonor') }}</p>
                            @endif
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="Nacionalidadr">Nacionalidad*</label>
                        <input type="text" class="form-control" id="Nacionalidadr" name="Nacionalidadr" >
                            @if ($errors->has('Nacionalidadr'))
                                <p class="text-danger">{{ $errors->first('Nacionalidadr') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                        <label class="label-cus" for="identificacionr">Identificación*</label>
                        <input type="text" class="form-control" id="identificacionr" name="identificacionr" >
                            @if ($errors->has('identificacionr'))
                                <p class="text-danger">{{ $errors->first('identificacionr') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="Emailr">Correo electrónico*</label>
                        <input type="text" class="form-control" id="Emailr" name="Emailr" >
                        </div>
                    </div>
                    </div>

                    <hr class="underline under_s">
                    
                    <h2 class="text-center h1_cus mt-4 mb-4">3. ACTIVIDAD ECONÓMICA </h2>

                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="TributaEEUU">La Empresa tributa en EE.UU*</label>
                        <select class="form-control" id="TributaEEUU" name="TributaEEUU">
                            <option value="c.c">Seleccione una opcion</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                            @if ($errors->has('TributaEEUU'))
                                <p class="text-danger">{{ $errors->first('TributaEEUU') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="CIIU">Código CIIU*</label>
                        <input type="text" class="form-control" id="CIIU" name="CIIU" >
                            @if ($errors->has('CIIU'))
                                <p class="text-danger">{{ $errors->first('CIIU') }}</p>
                            @endif
                        </div>
                        
                        <div class="form-group">
                        <label class="label-cus" for="Cuales1"> Cuáles?</label>
                        <input type="text" class="form-control" id="Cuales1" name="Cuales1" >
                        </div>

                        <div class="form-group">
                        <label class="label-cus" for="ActivosVirtuales">Maneja activos virtuales?*</label>
                        <select class="form-control" id="ActivosVirtuales" name="ActivosVirtuales">
                            <option value="">Seleccione una opcion</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                            @if ($errors->has('ActivosVirtuales'))
                                <p class="text-danger">{{ $errors->first('ActivosVirtuales') }}</p>
                            @endif
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                        <label class="label-cus" for="SSN">Número de SSN / ITIN (sólo aplica si tributa en EE.UU)</label>
                        <input type="text" class="form-control" id="SSN" name="SSN" >
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="TEmpresa">Tipo de Empresa *  (unicamente  persona  juridica)</label>
                        <select class="form-control" id="TEmpresa" name="TEmpresa">
                            <option value="c.c">Seleccione una opcion</option>
                            <option value="Publica">Pública</option>
                            <option value="Privada">Privada</option>
                            <option value="otra">otra</option>
                        </select>
                            @if ($errors->has('TEmpresa'))
                                <p class="text-danger">{{ $errors->first('TEmpresa') }}</p>
                            @endif
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="TRegimen">Tipo de Régimen* </label>
                        <select class="form-control" id="TRegimen" name="TRegimen">
                            <option value="">Seleccione una opcion</option>
                            <option value="Simplificado">Simplificado</option>
                            <option value="Comun">Común</option>
                            <option value="Especial">Especial</option>
                        </select>
                             @if ($errors->has('TRegimen'))
                                <p class="text-danger">{{ $errors->first('TRegimen') }}</p>
                            @endif
                        </div>

                        <div class="form-group">
                        <label class="label-cus" for="Cuales2"> Cuáles?</label>
                        <input type="text" class="form-control" id="Cuales2" name="Cuales2" >
                        </div>
                    </div>
                    </div>

                    <div class="text-center mt-4">
                    <button class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/accionista">Guardar y Continuar
                    </button></div> 
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
