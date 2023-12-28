<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lemco</title>
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

                                style="margin-top: 25px; color: #93c353">
                                <i class="fa-solid fa-arrow-left"></i>
                                {{ __('Regresar') }}
                                </a>
            </div>
    <div class="text-center">
            
            <img src="https://formacion.lemco.co/pluginfile.php/1/theme_edly/main_logo/1694462261/logo%20lemco.png"   class=" my-4 img-fluid">
            

        </div>
        
        <div class="card col-sm-12">
            <div class="card-body">
                <form action="{{ route('accionista.store',$id) }}" method="post">
                @csrf
                <h1 class=" text-center h1_cus">4. COMPOSICIÓN ACCIONARIA*</h1>
                    <div class="col-sm-12">
                    <p class="p_cus">Relacionar los accionistas o asociados que tengan una participación igual o superior al 5% en el capital social o aporte de la empresa hasta llegar al Beneficiario Final. 
                    En caso que tenga más de cinco (5) persona (natural y/o jurídica), adjuntar como documento anexo el certificado de composición firmado por Revisor Fiscal, Contador y/o Representante Legal (el que aplique).</p>
                    </div>

                    <h2 class="text-center h1_cus">Registro Accionistas</h2>
                    <div class="row">
                    <div class="col-md-6">
                 <div class="form-group">
                    <label for="Nombre" class="label-cus">Razón Social o nombre completo*</label>
                    <input type="text" class="form-control" id="Nombre" name="Nombre" placeholder="Ingrese su Razón Social o nombre completo">
                    @if ($errors->has('Nombre'))
                        <p class="text-danger">{{ $errors->first('Nombre') }}</p>
                    @endif
              </div>
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
                <label for="Nacionalidad" class="label-cus">Nacionalidad*</label>
                <input type="text" class="form-control" id="Nacionalidad" name="Nacionalidad" placeholder="Ingrese su nacionalidad">
                @if ($errors->has('Nacionalidad'))
                    <p class="text-danger">{{ $errors->first('Nacionalidad') }}</p>
                @endif
              </div>
              
            </div>
            <div class="col-md-6">
              
            <div class="form-group">
                <label for="Participacion" class="label-cus">Participación*</label>
                <input type="text" class="form-control" id="Participacion" name="Participacion" placeholder="Ingrese su participación">
                @if ($errors->has('Participacion'))
                    <p class="text-danger">{{ $errors->first('Participacion') }}</p>
                @endif
            </div>
              <div class="form-group">
                <label for="Identificacion" class="label-cus">Número*</label>
                <input type="text" class="form-control" id="Identificacion" name="Identificacion" placeholder="Ingrese su número">
                    @if ($errors->has('Identificacion'))
                        <p class="text-danger">{{ $errors->first('Identificacion') }}</p>
                    @endif
              </div>
              

              
            </div>
            
              
            </div>
            <div class="row justify-content-center " style="margin-bottom: 47px;">
                <div class="col-md-6 text-center">
                <button class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/declaracion">Agregar
                    </button>
                </div>
          </div>


          
                </form>
                <hr class="underline under_s">
                <div class="row">
                <div class="col-md-12">
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
                        @foreach ($accionistas as $accionista)
                                  <tr>
                                      <td>{{ $accionista->Nombre }}</td>
                                      <td>{{ $accionista->Tidentificacion }}</td>
                                      <td>{{ $accionista->Identificacion }}</td>
                                      <td>{{ $accionista->Participacion }}</td>
                                      <td>{{ $accionista->Nacionalidad }}</td>

                                      <td> {{ $accionista->PEP }}</td>
                                      <td>
                                        <form action="#" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                                        </form>
                                    </td>
                                  </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="div_inside form-group">
              <p class="div_p">Subir documento anexo*</p>
                <div class="div_img" >
                            <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img2"  class="img-fluid" onclick="document.getElementById('Rut').click()">
                            <input type="file" id="Rut" name="Rut" style="display:none;" onchange="validateFile1()">
                </div>
             </div>
                <center>
                <div class="col-md-12 " style="margin-right: 250px;">
                <a class="text-center btn" style="background-color: #193b64; color: #93c353; " href="/declaracion/{{$id}}">Continuar
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
