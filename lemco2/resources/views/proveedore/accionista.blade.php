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
                    <h1 class=" text-center h1_cus">4. COMPOSICIÓN ACCIONARIA*</h1>
                    <div class="col-sm-12">
                    <p class="p_cus">Relacionar los accionistas o asociados que tengan una participación igual o superior al 5% en el capital social o aporte de la empresa hasta llegar al Beneficiario Final. 
                    En caso que tenga más de cinco (5) persona (natural y/o jurídica), adjuntar como documento anexo el certificado de composición firmado por Revisor Fiscal, Contador y/o Representante Legal (el que aplique).</p>
                    </div>
                    <h2 class="text-center h1_cus">Registro Accionistas</h2>
                    <div class="row">
                    <div class="col-md-6">
                 <div class="form-group">
                <label for="flazonSocial" class="label-cus">Razón Social o nombre completo:</label>
                <input type="text" class="form-control" id="RazonSocial" name="RazonSocial" placeholder="Ingrese su Razón Social o nombre completo">
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
                <label for="nacionalidad" class="label-cus">Nacionalidad:</label>
                <input type="text" class="form-control" id="nacionalidad" name="nacionalidad" placeholder="Ingrese su nacionalidad">
              </div>
              
            </div>
            <div class="col-md-6">
              
            <div class="form-group">
                <label for="participacion" class="label-cus">Participación:</label>
                <input type="text" class="form-control" id="participacion" name="participacion" placeholder="Ingrese su participación">
            </div>
              <div class="form-group">
                <label for="numero" class="label-cus">Número:</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Ingrese su número">
              </div>

              <div class="row justify-content-center " style="margin-top: 47px;">
                <div class="col-md-6 text-center">
                <a class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/proveedore/declaracion">Agregar
                    </a>
                </div>
            </div>
              
              
            </div>
          </div>


          
                </form>
                <hr class="underline under_s">

                <div class="row">
                <div class="col-sm-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Tipo de Identidad</th>
                                <th>Documento</th>
                                <th>Participación</th>
                                <th>Nacionalidad</th>
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
