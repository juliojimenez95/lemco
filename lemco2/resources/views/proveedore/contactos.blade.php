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
            <form action="{{ route('contacto.store2',$id) }}" method="post">
                @csrf
                    <h2 class="text-center h1_cus mt-4 mb-4">9. DATOS DE CONTACTOS </h2>



                    <!-- Tercera sección (campos adicionales para la Identificación del Cliente) -->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="ContactoCo">Contacto Comercial*</label>
                                <input type="text" class="form-control" id="ContactoCo" name="ContactoCo" >
                                @if ($errors->has('ContactoCo'))
                                <p class="text-danger">{{ $errors->first('ContactoCo') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="CargoCo">Cargo *</label>
                                <input type="text" class="form-control" id="CargoCo" name="CargoCo" >
                                @if ($errors->has('CargoCo'))
                                <p class="text-danger">{{ $errors->first('CargoCo') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="CorreoCo">Correo electrónico*</label>
                                <input type="email" class="form-control" id="CorreoCo" name="CorreoCo" >
                                @if ($errors->has('CorreoCo'))
                                <p class="text-danger">{{ $errors->first('CorreoCo') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="TelefonoCo">Teléfono(s) y extensión*</label>
                                <input type="text" class="form-control" id="TelefonoCo" name="TelefonoCo" >
                                @if ($errors->has('TelefonoCo'))
                                <p class="text-danger">{{ $errors->first('TelefonoCo') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="CelularCo">Celular*</label>
                                <input type="text" class="form-control" id="CelularCo" name="CelularCo" >
                                @if ($errors->has('CelularCo'))
                                <p class="text-danger">{{ $errors->first('CelularCo') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <hr class="underline under_s">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="ContactoCa">Contacto Calidad / Logístico *</label>
                                <input type="text" class="form-control" id="ContactoCa" name="ContactoCa" >
                                @if ($errors->has('ContactoCa'))
                                 <p class="text-danger">{{ $errors->first('ContactoCa') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="CargoCa">Cargo *</label>
                                <input type="text" class="form-control" id="CargoCa" name="CargoCa" >
                                @if ($errors->has('CargoCa'))
                                <p class="text-danger">{{ $errors->first('CargoCa') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="CorreoCa">Correo electrónico*</label>
                                <input type="email" class="form-control" id="CorreoCa" name="CorreoCa" >
                                @if ($errors->has('CorreoCa'))
                                <p class="text-danger">{{ $errors->first('CorreoCa') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="TelefonoCa">Teléfono(s) y extensión*</label>
                                <input type="text" class="form-control" id="TelefonoCa" name="TelefonoCa" >
                                @if ($errors->has('TelefonoCa'))
                                <p class="text-danger">{{ $errors->first('TelefonoCa') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="CelularCa">Celular*</label>
                                <input type="text" class="form-control" id="CelularCa" name="CelularCa" >
                                @if ($errors->has('CelularCa'))
                                <p class="text-danger">{{ $errors->first('CelularCa') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <hr class="underline under_s">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="ContactoF">Contacto Financiero* </label>
                                <input type="text" class="form-control" id="ContactoF" name="ContactoF" >
                                @if ($errors->has('ContactoF'))
                                <p class="text-danger">{{ $errors->first('ContactoF') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="CargoF">Cargo* </label>
                                <input type="text" class="form-control" id="CargoF" name="CargoF" >
                                @if ($errors->has('CargoF'))
                                <p class="text-danger">{{ $errors->first('CargoF') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="correoElectronico">Correo electrónico*</label>
                                <input type="email" class="form-control" id="correoElectronico" name="correoElectronico" >
                                @if ($errors->has('correoElectronico'))
                                <p class="text-danger">{{ $errors->first('correoElectronico') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label-cus" for="CorreoF">Teléfono(s) y extensión*</label>
                                <input type="text" class="form-control" id="CorreoF" name="CorreoF" >
                                @if ($errors->has('CorreoF'))
                                <p class="text-danger">{{ $errors->first('CorreoF') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="CelularF">Celular*</label>
                                <input type="text" class="form-control" id="CelularF" name="CelularF" >
                                @if ($errors->has('CelularF'))
                                <p class="text-danger">{{ $errors->first('CelularF') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                    <button class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/fondos">Guardar y Continuar
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
