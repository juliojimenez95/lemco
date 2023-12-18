<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
                <form>
                    <h2 class="text-center h1_cus">REGISTRO DEL PROVEEDOR</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Primera sección -->
                            <div class="form-group">
                                <label class="label-cus" for="tipoVinculacion">Tipo de vinculación</label>
                                <input type="text" class="form-control" id="tipoVinculacion" name="tipoVinculacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="tipoPersona">Tipo de persona</label>
                                <input type="text" class="form-control" id="tipoPersona" name="tipoPersona" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Segunda sección -->
                            <div class="form-group">
                                <label class="label-cus" for="origenEmpresa">Origen de la empresa</label>
                                <input type="text" class="form-control" id="origenEmpresa" name="origenEmpresa" >
                            </div>
                        </div>
                    </div>

                    <!-- Línea separadora después de la primera sección -->
                    <hr class="underline under_s">

                    <!-- Título para la sección Identificación del Cliente -->
                    <h2 class="text-center h1_cus mt-4 mb-4">1. IDENTIFICACIÓN DEL PROVEEDOR </h2>

                    <!-- Tercera sección (campos adicionales para la Identificación del Cliente) -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="razonSocial">Razón social o nombre (para persona natural)*</label>
                                <input type="text" class="form-control" id="razonSocial" name="razonSocial" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="numeroIdentificacion">Número de identificación*</label>
                                <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="numeroIdentificacion">Domicilio (país - ciudad)*</label>
                                <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="correoElectronico">Correo electrónico*</label>
                                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="tipoIdentificacion">Tipo de identificación*</label>
                                <input type="text" class="form-control" id="tipoIdentificacion" name="tipoIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="paginaWeb">Dirección social *</label>
                                <input type="url" class="form-control" id="paginaWeb" name="paginaWeb" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="paginaWeb">Teléfono*</label>
                                <input type="url" class="form-control" id="paginaWeb" name="paginaWeb" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="paginaWeb">Página web</label>
                                <input type="url" class="form-control" id="paginaWeb" name="paginaWeb" >
                            </div>
                        </div>
                    </div>
                    <hr class="underline under_s">

                    <h2 class="text-center h1_cus mt-4 mb-4">2. REPRESENTANTE LEGAL (Sólo si es persona jurídica)</h2>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="nombreRepresentante">Nombres y apellidos completos</label>
                        <input type="text" class="form-control" id="nombreRepresentante" name="nombreRepresentante" >
                        </div>
                        <div class="form-group">
                            <label for="tipoIdentificacion" class="label-cus">Tipo de identificación:</label>
                            <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">
                                <option value="c.c">C.C. (Cédula de Ciudadanía)</option>
                                <option value="c.e">C.E. (Cédula de Extranjería)</option>
                                <option value="p.p">P.P. (Pasaporte)</option>
                            </select>
                        </div>

                        <div class="form-group">
                        <label class="label-cus" for="nacionalidadRepresentante">Teléfono</label>
                        <input type="text" class="form-control" id="nacionalidadRepresentante" name="nacionalidadRepresentante" >
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="nacionalidadRepresentante">Nacionalidad</label>
                        <input type="text" class="form-control" id="nacionalidadRepresentante" name="nacionalidadRepresentante" >
                        </div>

                        <div class="form-group">
                        <label class="label-cus" for="tipoIdRepresentante">Número</label>
                        <input type="text" class="form-control" id="tipoIdRepresentante" name="tipoIdRepresentante" >
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="nacionalidadRepresentante">Correo electrónico*</label>
                        <input type="text" class="form-control" id="nacionalidadRepresentante" name="nacionalidadRepresentante" >
                        </div>
                    </div>
                    </div>
                    <hr class="underline under_s">
                    
                    <h2 class="text-center h1_cus mt-4 mb-4">3. ACTIVIDAD ECONÓMICA </h2>

                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="EE.UU">La Empresa tributa en EE.UU</label>
                        <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">
                            <option value="c.c">Seleccione una opcion</option>
                            <option value="c.c">Si</option>
                            <option value="c.e">No</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="CIIU">Código CIIU</label>
                        <input type="text" class="form-control" id="CIIU" name="CIIU" >
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="EE.UU">Tipo de Régimen </label>
                        <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">
                            <option value="c.c">Seleccione una opcion</option>
                            <option value="c.c">Si</option>
                            <option value="c.e">No</option>
                        </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                         <div class="form-group">
                        <label class="label-cus" for="SSN">Número de SSN / ITIN (sólo aplica si tributa en EE.UU)</label>
                        <input type="text" class="form-control" id="SSN" name="SSN" >
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="EE.UU">Tipo de Empresa * (unicamente  persona  juridica)</label>
                        <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">
                            <option value="c.c">Seleccione una opcion</option>
                            <option value="c.c">Pública</option>
                            <option value="c.c">Privada</option>
                            <option value="c.e">otra</option>
                        </select>
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="EE.UU">Maneja activos virtuales? </label>
                        <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">
                            <option value="c.c">Seleccione una opcion</option>
                            <option value="c.c">Si</option>
                            <option value="c.e">No</option>
                        </select>
                        </div>
                    </div>
                    </div>

                    <div class="text-center mt-4">
                    <a class="text-center btn " style="background-color: #193b64; color: #93c353;"   href="/proveedore/accionista">Guardar y Continuar
                    </a></div> 
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
