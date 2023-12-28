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
                    <h2 class="text-center h1_cus">5. DECLARACIÓN PARA EL CONOCIMIENTO DE PERSONA EXPUESTA O RECONOCIDA POLÍTICAMENTE “PEP”*</h2>
                    <div class="col-sm-12 text-center">
                    <p class="p_cus">Marque con un "Si" si algún Representante Legal, Socio o Accionista de la Empresa cuenta con algunas de las siguientes cualidades:*</div>
                    <div class="row">
                    <div class="col-md-12 mb-4">
                <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="label-cus">¿Personas que por razón de su cargo manejan recursos públicos? </span>
                        </div>
                        <div class="">
                          <label class="mr-2 label-cus" >Si <input type="radio" name="grupo1" value="Si"></label>
                          <label class="mr-2 label-cus" >No <input type="radio" name="grupo1" value="No"></label>
                          <span class="mr_5 label-cus">¿Quién?</span>
                          <input type="text" class="input_col" name="Observacion" id="Observacion">
                        </div>


                  </div>
                </div>
                </div>

                <div class="col-md-12 mb-4">
              <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="label-cus">¿Personas que detentan algún grado de poder público? </span>
                        </div>
                        <div class="">
                          <label class="label-cus" >Si <input type="radio" name="grupo2" value="Si"></label>
                          <label class="label-cus" >No <input type="radio" name="grupo2" value="No"></label>
                          <span class="label-cus mr_5">¿Quién?</span>
                          <input type="text" name="Observacion2" id="Observacion2" class="input_col">
                        </div>
                  </div>
              </div>
             </div>
             <div class="col-md-12 mb-4">
              <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="label-cus">¿Personas que gozan de reconocimiento público? </span>
                        </div>
                        <div class="">
                          <label class="label-cus" >Si <input type="radio" name="grupo2" value="Si"></label>
                          <label class="label-cus" >No <input type="radio" name="grupo2" value="No"></label>
                          <span class="label-cus mr_5">¿Quién?</span>
                          <input type="text" name="Observacion2" id="Observacion2" class="input_col">
                        </div>
                  </div>
              </div>
             </div>
             <div class="col-md-12 mb-4">
              <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="label-cus">¿PEP Organización internacional? </span>
                        </div>
                        <div class="">
                          <label class="label-cus" >Si <input type="radio" name="grupo2" value="Si"></label>
                          <label class="label-cus" >No <input type="radio" name="grupo2" value="No"></label>
                          <span class="label-cus mr_5">¿Quién?</span>
                          <input type="text" name="Observacion2" id="Observacion2" class="input_col">
                        </div>
                  </div>
              </div>
             </div>
             <div class="col-md-12 mb-4">
              <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="label-cus">PEP extranjero </span>
                        </div>
                        <div class="">
                          <label class="label-cus" >Si <input type="radio" name="grupo2" value="Si"></label>
                          <label class="label-cus" >No <input type="radio" name="grupo2" value="No"></label>
                          <span class="label-cus mr_5">¿Quién?</span>
                          <input type="text" name="Observacion2" id="Observacion2" class="input_col">
                        </div>
                  </div>
              </div>
             </div>

          </div>

          <div class="row justify-content-center " style="margin-top: 47px;">
                <div class="col-md-6 text-center">
                <a class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/proveedore/financiera">Guardar y Continuar
                    </a>
                </div>
            </div>
          
                </form>
        

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
