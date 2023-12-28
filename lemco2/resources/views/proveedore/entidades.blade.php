<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/anexos.css') }}">


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
            <form action="{{ route('entidades.store',$id) }}" method="post">
                @csrf
                    <h2 class="text-center h1_cus">7. REGISTRO DE ENTIDADES FINANCIERAS*</h2>
                    <div class="col-sm-12 text-center">
                    <p class="p_cus">Autorizo a Grupo Lemco a realizar los pagos en la siguiente cuenta: Adjunte Certificado en anexos.</div>
                    <div class="row">
                    <div class="col-md-6">
                 <div class="form-group">
                <label for="Entidad" class="label-cus">Entidad*</label>
                <input type="text" class="form-control" id="Entidad" name="Entidad" >
                @if ($errors->has('Entidad'))
                    <p class="text-danger">{{ $errors->first('Entidad') }}</p>
                @endif
              </div>
              <div class="form-group">
                <label for="Ciudad" class="label-cus">Ciudad*</label>
                <input type="text" class="form-control" id="Ciudad" name="Ciudad" >
                @if ($errors->has('Ciudad'))
                    <p class="text-danger">{{ $errors->first('Ciudad') }}</p>
                @endif
              </div>

              <div class="form-group">
                <label for="Cuenta" class="label-cus">Número de la cuenta *</label>
                <input type="text" class="form-control" id="Cuenta" name="Cuenta" >
                @if ($errors->has('Cuenta'))
                    <p class="text-danger">{{ $errors->first('Cuenta') }}</p>
                @endif
              </div>

              <div class="div_inside form-group">
              <p class="div_p">Subir documento anexo<span>*</span></p>
                <div class="div_img" >
                            <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img2"  class="img-fluid" onclick="document.getElementById('Certificado').click()">
                            <input type="file" id="Certificado" name="Certificado" style="display:none;" onchange="validateFile1()">
                </div>
                @if ($errors->has('Pais'))
                    <p class="text-danger">{{ $errors->first('Pais') }}</p>
                @endif
             </div>
              
            </div>
            <div class="col-md-6">
              
            <div class="form-group">
                <label for="Pais" class="label-cus">Pais*</label>
                <input type="text" class="form-control" id="Pais" name="Pais" >
                @if ($errors->has('Pais'))
                    <p class="text-danger">{{ $errors->first('Pais') }}</p>
                @endif
            </div>
            
            <div class="form-group">
                <label for="Tproducto" class="label-cus">Tipo de producto (corriente / ahorros) *</label>
                <input type="text" class="form-control" id="Tproducto" name="Tproducto" >
                @if ($errors->has('Tproducto'))
                    <p class="text-danger">{{ $errors->first('Tproducto') }}</p>
                @endif
            </div>

            <div class="form-group">
                <label for="Correo" class="label-cus">Correo Electrónico (a dónde se envian los soportes de pago):opcional</label>
                <input type="text" class="form-control" id="Correo" name="Correo" >
                @if ($errors->has('TEmpresa'))
                    <p class="text-danger">{{ $errors->first('TEmpresa') }}</p>
                @endif
            </div>

              
            </div>
              
              
            </div>
            <div class="row justify-content-center " style="margin-top: 47px;">
                <div class="col-md-6 text-center">
                <button class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/proveedore/clientes">Agregar
                    </button>
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
