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
        .p_cus {
            color: #003366; /* Color del texto para p */
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
                    <h2 class="text-center h1_cus">6.1 Información de Operaciones Internacionales (Manifestación sobre la realización de actividades en moneda extranjera) si aplica</h2>
                    <div class="row">
                    <div class="col-md-6">
                 <div class="form-group">
                <label for="flazonSocial" class="label-cus">Entidad*</label>
                <input type="text" class="form-control" id="RazonSocial" name="RazonSocial" >
              </div>

              <div class="form-group">
                <label for="participacion" class="label-cus">Tipo de producto*</label>
                <input type="text" class="form-control" id="participacion" name="participacion" >
            </div>
              <div class="form-group">
                <label for="nacionalidad" class="label-cus">Monto*</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" >
              </div>

              
            </div>
            <div class="col-md-6">
              
            <div class="form-group">
                <label for="participacion" class="label-cus">Ciudad País*</label>
                <input type="text" class="form-control" id="participacion" name="participacion" >
            </div>
            
            <div class="form-group">
                <label for="participacion" class="label-cus">Identificación del Producto*</label>
                <input type="text" class="form-control" id="participacion" name="participacion" >
            </div>

            <div class="form-group">
                <label for="participacion" class="label-cus">Tipo de Moneda*</label>
                <input type="text" class="form-control" id="participacion" name="participacion" >
            </div>

              
            </div>
              
              
            </div>

            <div class="row justify-content-center " style="margin-bottom: 47px;">
                <div class="col-md-6 text-center">
                <a class="text-center btn " style="background-color: #193b64; color: #93c353;"  href="/proveedore/entidades">Agregar
                    </a>
                </div>
          </div>


          
                </form>
                <hr class="underline under_s">

                <div class="row">
                <div class="col-sm-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Entidad</th>
                                        <th>Ciudad País</th>
                                        <th>Tipo de producto</th>
                                        <th>Identificación del Producto</th>
                                        <th>Monto</th>
                                        <th>Tipo de Moneda</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        
                                    </tr>
                                    <!-- Agrega más filas según sea necesario -->
                                </tbody>
                            </table>
                        </div>
                        <center>
                        <div class="col-md-12 d-flex ">
                        <a class="text-center btn " style="background-color: #193b64; color: #93c353;"  href="/proveedore/entidades">Continuar
                            </a>
                        </div>
                    </div>
                    </center>
            </div>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
