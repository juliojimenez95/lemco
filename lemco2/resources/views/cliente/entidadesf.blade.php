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
            <form action="{{ route('entidadesf.store',$id) }}" method="post">
                @csrf
                    <h2 class="text-center h1_cus">6.1 Información de Operaciones Internacionales (Manifestación sobre la realización de actividades en moneda extranjera) si aplica</h2>
                    <div class="row">
                    <div class="col-md-6">
                 <div class="form-group">
                <label for="Entidad" class="label-cus">Entidad*</label>
                <input type="text" class="form-control" id="Entidad" name="Entidad" >
              </div>

              <div class="form-group">
                <label for="Ciudad" class="label-cus">Ciudad*</label>
                <input type="text" class="form-control" id="Ciudad" name="Ciudad" >
            </div>

            <div class="form-group">
                <label for="Identificacionp" class="label-cus">Identificación del Producto*</label>
                <input type="text" class="form-control" id="Identificacionp" name="Identificacionp" >
            </div>
              
              <div class="form-group">
                <label for="Monto" class="label-cus">Monto*</label>
                <input type="text" class="form-control" id="Monto" name="Monto" >
              </div>

              
            </div>
            <div class="col-md-6">
              
            <div class="form-group">
                <label for="Pais" class="label-cus">Ciudad País*</label>
                <input type="text" class="form-control" id="Pais" name="Pais" >
            </div>
            <div class="form-group">
                <label for="Tproducto" class="label-cus">Tipo de producto*</label>
                <input type="text" class="form-control" id="Tproducto" name="Tproducto" >
            </div>
            
            

            <div class="form-group">
                <label for="TMoneda" class="label-cus">Tipo de Moneda*</label>
                <input type="text" class="form-control" id="TMoneda" name="TMoneda" >
            </div>

              
            </div>
              
              
            </div>

            <div class="row justify-content-center " style="margin-bottom: 47px;">
                <div class="col-md-6 text-center">
                <button class="text-center btn " style="background-color: #193b64; color: #93c353;" >Agregar
                    </button>
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
                                        <th>Ciudad</th>
                                        <th>País</th>
                                        <th>Tipo de producto</th>
                                        <th>Identificación del Producto</th>
                                        <th>Monto</th>
                                        <th>Tipo de Moneda</th>
                                        <th>Eliminar</th>


                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($entidades as $entidad)
                                        <tr>
                                            <td>{{ $entidad->Entidad }}</td>
                                            <td>{{ $entidad->Pais }}</td>
                                            <td>{{ $entidad->Ciudad }}</td>
                                            <td>{{ $entidad->Tproducto }}</td>
                                            <td>{{ $entidad->Identificacionp }}</td>
                                            <td>{{ $entidad->Monto }}</td>                                            
                                            <td>{{ $entidad->TMoneda }}</td>
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
                        <center>
                        @if ($user->Rol == 1)
                        <div class="col-md-12 d-flex ">
                        <a class="text-center btn " style="background-color: #193b64; color: #93c353;"  href="/contactos/{{$id}}">Continuar
                            </a>
                        </div>
                        @else
                        <div class="col-md-12 d-flex ">
                        <a class="text-center btn " style="background-color: #193b64; color: #93c353;"  href="/proveedore/entidades/{{$id}}">Continuar
                            </a>
                        </div>
                        @endif
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
