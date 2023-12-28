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
            <form action="{{ route('firma.store',$id) }}" method="post">
                @csrf
                    <h2 class="text-center h1_cus">12. FIRMA DEL REPRESENTANTE LEGAL Ó PERSONA NATURAL</h2>
                    <div class="row">
                    <div class="col-md-6">
                 <div class="form-group">
                <label for="Nombre" class="label-cus">Nombre completo*</label>
                <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Nombre completo">
                @if ($errors->has('Nombre'))
                    <p class="text-danger">{{ $errors->first('Nombre') }}</p>
                @endif
              </div>
              
              <div class="form-group">
                <label for="Identificacion" class="label-cus">No. de identificación*</label>
                <input type="text" class="form-control" id="Identificacion" name="Identificacion" placeholder="Ingrese su nacionalidad">
                @if ($errors->has('Identificacion'))
                    <p class="text-danger">{{ $errors->first('Identificacion') }}</p>
                @endif
              </div>
              
            </div>
            <div class="col-md-6">
              
            <div class="form-group">
                <label for="Tidentificacion" class="label-cus">Tipo de identificación*</label>
                <select class="form-control" id="Tidentificacion" name="Tidentificacion">
                    <option value="c.c">C.C. (Cédula de Ciudadanía)</option>
                    <option value="c.e">C.E. (Cédula de Extranjería)</option>
                    <option value="p.p">P.P. (Pasaporte)</option>
                </select>
                @if ($errors->has('Tidentificacion'))
                    <p class="text-danger">{{ $errors->first('Tidentificacion') }}</p>
                @endif
            </div>
              <div class="form-group">
                <canvas id="firma" width="200" height="50"></canvas>
                <hr class=" under_s">
                <label for="Firma" class="label-cus">Firma*</label>
                @if ($errors->has('Firma'))
                    <p class="text-danger">{{ $errors->first('Firma') }}</p>
                @endif
              </div>

            </div>
              
              
            </div>
          </div>

        <center>
          
          <strong><p class="p_cus">Declaro que la información que he suministrado en este formulario, asi como la documentación aportada es verídica, correcta y completa y puede ser verificada en cualquier momento. Además, me comprometo a actualizarla de acuerdo a sus Politicas del Grupo Lemco</p></strong>

            <div class="row justify-content-center " style="margin-bottom: 40px;">
            <div class="col-md-6 text-center">
            <button class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/anexo">Guardar y Continuar
                </button>
            </div>
            </center>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
