<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemco</title>
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
                    <h2 class="text-center h1_cus">6. INFORMACIÓN GENERAL FINANCIERA </h2>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Primera sección -->
                            <div class="form-group">
                                <label class="label-cus" for="tipoVinculacion">Capital social pagado</label>
                                <input type="text" class="form-control" id="tipoVinculacion" name="tipoVinculacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="tipoPersona">Total activos</label>
                                <input type="text" class="form-control" id="tipoPersona" name="tipoPersona" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="tipoPersona">Egresos mensuales</label>
                                <input type="text" class="form-control" id="tipoPersona" name="tipoPersona" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="tipoPersona">Ingresos no operacionales</label>
                                <input type="text" class="form-control" id="tipoPersona" name="tipoPersona" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Segunda sección -->
                            <div class="form-group">
                                <label class="label-cus" for="origenEmpresa">Total pasivos</label>
                                <input type="text" class="form-control" id="origenEmpresa" name="origenEmpresa" >
                            </div>

                            <div class="form-group">
                                <label class="label-cus" for="origenEmpresa">Ingresos mensuales</label>
                                <input type="text" class="form-control" id="origenEmpresa" name="origenEmpresa" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="origenEmpresa">Concepto ingresos no operacionales</label>
                                <input type="text" class="form-control" id="origenEmpresa" name="origenEmpresa" >
                            </div>
                        </div>
                    </div>

                    <!-- Línea separadora después de la primera sección -->
                    <hr class="underline under_s">

                    <!-- Título para la sección Identificación del Cliente -->
                    <h2 class="text-center h1_cus mt-4 mb-4">6.1 Información de Operaciones Internacionales (Manifestación sobre la realización de actividades en moneda extranjera) si aplica </h2>

                    <!-- Tercera sección (campos adicionales para la Identificación del Cliente) -->
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="EE.UU">Realiza Operaciones en Moneda Extranjera </label>
                        <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">
                            <option value="c.c">Seleccione una opcion</option>
                            <option value="c.c">Si</option>
                            <option value="c.e">No</option>
                        </select>
                        </div>
                            <div class="form-group">
                                <label class="label-cus" for="numeroIdentificacion">En caso de responder otras cuáles:</label>
                                <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="correoElectronico">Cuáles</label>
                                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="label-cus" for="EE.UU">Tipo de operaciones </label>
                            <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">
                                <option value="c.c">Seleccione una opcion</option>
                                <option value="c.c">Importaciones</option>
                                <option value="c.e">Exportaciones</option>
                                <option value="c.e">Prestamos</option>
                                <option value="c.e">Inversiones</option>
                                <option value="c.e">Giros/remesas</option>
                                <option value="c.e">Pago servicios</option>
                                <option value="c.e">Otras</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="EE.UU">Posee productos financieros en moneda extranjera  </label>
                                <select class="form-control" id="tipoIdentificacion" name="tipoIdentificacion">
                                    <option value="c.c">Seleccione una opcion</option>
                                    <option value="c.c">Si</option>
                                    <option value="c.e">No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="paginaWeb">Página web</label>
                                <input type="url" class="form-control" id="paginaWeb" name="paginaWeb" >
                            </div>
                        </div>
                    </div>
                    <hr class="underline under_s">

                    <h2 class="text-center h1_cus mt-4 mb-4">7. DATOS DE CONTACTOS </h2>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="nombreRepresentante">Correo recepción facturación</label>
                        <input type="text" class="form-control" id="nombreRepresentante" name="nombreRepresentante" >
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="tipoIdRepresentante">Nombre contacto principal</label>
                        <input type="text" class="form-control" id="tipoIdRepresentante" name="tipoIdRepresentante" >
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="tipoIdRepresentante">Teléfono</label>
                        <input type="text" class="form-control" id="tipoIdRepresentante" name="tipoIdRepresentante" >
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="nacionalidadRepresentante">Cargo</label>
                        <input type="text" class="form-control" id="nacionalidadRepresentante" name="nacionalidadRepresentante" >
                        </div>
                        <div class="form-group">
                        <label class="label-cus" for="nacionalidadRepresentante">Correo electrónico</label>
                        <input type="text" class="form-control" id="nacionalidadRepresentante" name="nacionalidadRepresentante" >
                        </div>

                        <div class="form-group">
                        <label class="label-cus" for="nacionalidadRepresentante">Fecha de cierre (opcional)</label>
                        <input type="date" class="form-control" id="nacionalidadRepresentante" name="nacionalidadRepresentante" >
                        </div>
                    </div>
                    </div>

                    <div class="text-center mt-4">
                    <a class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/fondos">Guardar y Continuar
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
