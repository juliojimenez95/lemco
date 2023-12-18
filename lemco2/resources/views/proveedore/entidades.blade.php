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
                    <h2 class="text-center h1_cus">7. REGISTRO DE ENTIDADES FINANCIERAS</h2>
                    <div class="row">
                    <div class="col-md-6">
                 <div class="form-group">
                <label for="flazonSocial" class="label-cus">Entidad*</label>
                <input type="text" class="form-control" id="RazonSocial" name="RazonSocial" >
              </div>
              <div class="form-group">
                <label for="nacionalidad" class="label-cus">Ciudad*</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" >
              </div>

              <div class="form-group">
                <label for="numero" class="label-cus">Número de la cuenta *</label>
                <input type="text" class="form-control" id="numero" name="numero" >
              </div>
              
            </div>
            <div class="col-md-6">
              
            <div class="form-group">
                <label for="participacion" class="label-cus">Pais*</label>
                <input type="text" class="form-control" id="participacion" name="participacion" >
            </div>
            
            <div class="form-group">
                <label for="participacion" class="label-cus">Tipo de producto (corriente / ahorros) *</label>
                <input type="text" class="form-control" id="participacion" name="participacion" >
            </div>

              <div class="row justify-content-center " style="margin-top: 47px;">
                <div class="col-md-6 text-center">
                <a class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/proveedore/clientes">Agregar
                    </a>
                </div>
            </div>
              
              
            </div>
          </div>


          
                </form>

                <div class="row">
                <div class="col-sm-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Entidad</th>
                                <th>Pais</th>
                                <th>Ciudad</th>
                                <th>Tipo de producto</th>
                                <th>Número de la cuenta</th>
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
                <a class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/declaracion">Continuar
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
