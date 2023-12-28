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
            <form action="{{ route('reporter.store2',$id) }}" method="post">
                @csrf
                <h2 class="text-center h1_cus">12. DECLARACIÓN CONFLICTO DE INTERESES </h2>
                        <div class="row">
                        <div class="col-md-12">
                        <p class="p_cus">Con la firma del presente formulario me comprometo a declarar de manera oportuna, completa y veraz los conflictos de intereses que tengamos frente a cualquiera de sus Socios, Directivos, Representantes y/o Empleados, en lo relación con: </p>
                        <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="p_cus">1. Guarda relación de parentesco que represente algún tipo de interés economico con algún empleado <br> de las Empresas del Grupo Lemco?  </span>
                        </div>
                        <div class="">
                          <label class="mr-2 p_cus" >Si <input type="radio" name="Parentesco" value="Si"></label>
                          <label class="mr-2 p_cus" >No <input type="radio" name="Parentesco" value="No"></label>
                          @if ($errors->has('Parentesco'))
                                <p class="text-danger">{{ $errors->first('Parentesco') }}</p>
                          @endif
                        </div>
                        

                  </div>
                </div>
                

                <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="p_cus">2. Le han requerido dádivas, regalos o mercancía para iniciar la relación comercial con Empresas del Grupo Lemco?  </span>
                        </div>
                        <div class="">
                          <label class="mr-2 p_cus" >Si <input type="radio" name="Regalos" value="Si"></label>
                          <label class="mr-2 p_cus" >No <input type="radio" name="Regalos" value="No"></label>
                          @if ($errors->has('Regalos'))
                                <p class="text-danger">{{ $errors->first('Regalos') }}</p>
                          @endif
                        </div>


                  </div>
                </div>

                <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="p_cus">3. Existe alguna situación que pudiera afectar su objetividad o indepencia en la relación comercial? </span>
                        </div>
                        <div class="">
                          <label class="mr-2 p_cus" >Si <input type="radio" name="SituacionA" value="Si"></label>
                          <label class="mr-2 p_cus" >No <input type="radio" name="SituacionA" value="No"></label>
                          @if ($errors->has('SituacionA'))
                                <p class="text-danger">{{ $errors->first('SituacionA') }}</p>
                          @endif
                        </div>
                  </div>
                </div>

                <p class="p_cus">En caso positivo de algunas de las tres preguntas, anexaré diligenciado el formulario de declaración y reporte de conflito de interes
De igual forma, acepto de manera voluntaria o inequívoca para que una o varias de las Empresas del Grupo Lemco se reserven el derecho de verificar la documentación e información facilitada en el proceso de vinculación o actualización. </p>

              <div class="row justify-content-center " style="margin-top: 47px;">
                <div class="col-md-6 text-center">
                <button class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/proveedore/firma">Guardar y Continuar
                    </button>
                </div>
            </div>
              
              
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
