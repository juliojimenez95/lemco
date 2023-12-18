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
                    <h2 class="text-center h1_cus">9. DATOS DE CONTACTOS *</h2>
                    <p class="label-cus">De acuerdo a la Ley Estatutaria 1581 de 2012 reglamentada por el Decreto No.1377 de 2013 y obrando a nombre propio y como Representante Legal de la razón social que represento autorizo de manera previa, informada, voluntaria y expresa a Lemco S.A.S., Challenger S.A.S, Operadora Habitel S.A.S, Habitel S.A.S, Fundación Challenger, Sky Forwarder S.A.S, Sky Industrial S.A.S, Sky Logística Integral S.A.S y Sky Electronics Zona Franca S.A.S para la recolección, tratamiento, almacenamiento, conservación, uso, circulación, supresión, transmisión y transferencia de datos personales suministrados en el presente formulario así como los recolectados de manera biométrica, por medios electrónicos o cualquier otro medio, cuyas finalidades, derechos de los titulares y  procedimiento para  presentación de reclamos pueden ser consultadas en la Política de Tratamiento de Datos Personales que se encuentra publicada en la páginas www.lemco.co.</p>

                       
                    <!-- Tercera sección (campos adicionales para la Identificación del Cliente) -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="razonSocial">Contacto Comercial </label>
                                <input type="text" class="form-control" id="razonSocial" name="razonSocial" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="numeroIdentificacion">Cargo </label>
                                <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="correoElectronico">Correo electrónico</label>
                                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="tipoIdentificacion">Teléfono(s) y extensión</label>
                                <input type="text" class="form-control" id="tipoIdentificacion" name="tipoIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="paginaWeb">Celular</label>
                                <input type="url" class="form-control" id="paginaWeb" name="paginaWeb" >
                            </div>
                        </div>
                    </div>
                    <hr class="underline under_s">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="razonSocial">Contacto Financiero </label>
                                <input type="text" class="form-control" id="razonSocial" name="razonSocial" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="numeroIdentificacion">Cargo </label>
                                <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="correoElectronico">Correo electrónico</label>
                                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="tipoIdentificacion">Teléfono(s) y extensión</label>
                                <input type="text" class="form-control" id="tipoIdentificacion" name="tipoIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="paginaWeb">Celular</label>
                                <input type="url" class="form-control" id="paginaWeb" name="paginaWeb" >
                            </div>
                        </div>
                    </div>
                    <hr class="underline under_s">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="razonSocial">Contacto Calidad / Logístico </label>
                                <input type="text" class="form-control" id="razonSocial" name="razonSocial" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="numeroIdentificacion">Cargo </label>
                                <input type="text" class="form-control" id="numeroIdentificacion" name="numeroIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="correoElectronico">Correo electrónico</label>
                                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="tipoIdentificacion">Teléfono(s) y extensión</label>
                                <input type="text" class="form-control" id="tipoIdentificacion" name="tipoIdentificacion" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="paginaWeb">Celular</label>
                                <input type="url" class="form-control" id="paginaWeb" name="paginaWeb" >
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                    <a class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/proveedore/fondos">Guardar y Continuar
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
