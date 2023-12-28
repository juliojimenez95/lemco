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
            <form action="{{ route('clientesp.store',$id) }}" method="post">
                @csrf
                    <h2 class="text-center h1_cus">8. PRINCIPALES CLIENTES</h2>
                    <div class="row">
                    <div class="col-md-6">
                 <div class="form-group">
                <label for="Empresa" class="label-cus">Empresa</label>
                <input type="text" class="form-control" id="Empresa" name="Empresa" >
              </div>

              <div class="form-group">
                <label for="Contacto" class="label-cus">Contacto (nombres y apellidos)</label>
                <input type="text" class="form-control" id="Contacto" name="Contacto" >
            </div>
              <div class="form-group">
                <label for="Correo" class="label-cus">Correo Electrónico</label>
                <input type="text" class="form-control" id="Correo" name="Correo" >
              </div>

              
            </div>
            <div class="col-md-6">
              
            <div class="form-group">
                <label for="Cargo" class="label-cus">Cargo</label>
                <input type="text" class="form-control" id="Cargo" name="Cargo" >
            </div>
            
            <div class="form-group">
                <label for="Telefono" class="label-cus">Teléfono / Celular</label>
                <input type="text" class="form-control" id="Telefono" name="Telefono" >
            </div>

              <div class="row justify-content-center " style="margin-top: 47px;">
                <div class="col-md-6 text-center">
                <button class="text-center btn " style="background-color: #193b64; color: #93c353;"  href="/proveedore/contactos">Agregar
                    </button>
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
                                        <th>Empresa</th>
                                        <th>Cargo</th>
                                        <th>Contacto</th>
                                        <th>Teléfono / Celular</th>
                                        <th>Correo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach ($clientes as $cliente)
                                    <tr>
                                        <td>{{ $cliente->Empresa }}</td>
                                        <td>{{ $cliente->Cargo }}</td>
                                        <td>{{ $cliente->Contacto }}</td>
                                        <td>{{ $cliente->Telefono }}</td>
                                        <td>{{ $cliente->Correo }}</td>
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
                        <div class="col-md-12 d-flex ">
                        <a class="text-center btn " style="background-color: #193b64; color: #93c353;"  href="/proveedore/contactos/{{$id}}">Continuar
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
