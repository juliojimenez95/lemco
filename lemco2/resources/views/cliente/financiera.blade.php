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
            <form action="{{ route('financiera.store',$id) }}" method="post">
                @csrf
                    <h2 class="text-center h1_cus">6. INFORMACIÓN GENERAL FINANCIERA </h2>
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Primera sección -->
                            <div class="form-group">
                                <label class="label-cus" for="Capital">Capital social pagado</label>
                                <input type="text" class="form-control" id="Capital" name="Capital" >
                                @if ($errors->has('Capital'))
                                    <p class="text-danger">{{ $errors->first('Capital') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="Activos">Total activos</label>
                                <input type="text" class="form-control" id="Activos" name="Activos" >
                                @if ($errors->has('Activos'))
                                    <p class="text-danger">{{ $errors->first('Activos') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="EgresosMensuales">Egresos mensuales</label>
                                <input type="text" class="form-control" id="EgresosMensuales" name="EgresosMensuales" >
                                @if ($errors->has('EgresosMensuales'))
                                    <p class="text-danger">{{ $errors->first('EgresosMensuales') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="IngresosNoOperacionales">Ingresos no operacionales</label>
                                <input type="text" class="form-control" id="IngresosNoOperacionales" name="IngresosNoOperacionales" >
                                @if ($errors->has('IngresosNoOperacionales'))
                                    <p class="text-danger">{{ $errors->first('IngresosNoOperacionales') }}</p>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- Segunda sección -->
                            <div class="form-group">
                                <label class="label-cus" for="Pasivos">Total pasivos</label>
                                <input type="text" class="form-control" id="Pasivos" name="Pasivos" >
                                @if ($errors->has('Pasivos'))
                                    <p class="text-danger">{{ $errors->first('Pasivos') }}</p>
                                @endif
                            </div>

                            <div class="form-group">
                                <label class="label-cus" for="IngresosMensuales">Ingresos mensuales</label>
                                <input type="text" class="form-control" id="IngresosMensuales" name="IngresosMensuales" >
                                @if ($errors->has('IngresosMensuales'))
                                    <p class="text-danger">{{ $errors->first('IngresosMensuales') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="ConceptoIngresosNoOperacionales">Concepto ingresos no operacionales</label>
                                <input type="text" class="form-control" id="ConceptoIngresosNoOperacionales" name="ConceptoIngresosNoOperacionales" >
                                @if ($errors->has('ConceptoIngresosNoOperacionales'))
                                    <p class="text-danger">{{ $errors->first('ConceptoIngresosNoOperacionales') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Línea separadora después de la primera sección -->
                    <hr class="underline under_s">

                    <!-- Título para la sección Identificación del Cliente -->
                    <h2 class="text-center h1_cus mt-4 mb-4">6.1 Información de Operaciones Internacionales (Manifestación sobre la realización de actividades en moneda extranjera) si aplica </h2>

                    <!-- Tercera sección (campos adicionales para la Identificación del Cliente) -->
                    <div class="row">
                        <div class="col-md-6">
                        <div class="form-group">
                        <label class="label-cus" for="MonedaExt">Realiza Operaciones en Moneda Extranjera </label>
                        <select class="form-control" id="MonedaExt" name="MonedaExt">
                            <option value="c.c">Seleccione una opcion</option>
                            <option value="1">Si</option>
                            <option value="0">No</option>
                        </select>
                                @if ($errors->has('ConceptoIngresosNoOperacionales'))
                                    <p class="text-danger">{{ $errors->first('ConceptoIngresosNoOperacionales') }}</p>
                                @endif
                        </div>
                            <div class="form-group">
                                <label class="label-cus" for="Cuales1">En caso de responder otras cuáles:</label>
                                <input type="text" class="form-control" id="Cuales1" name="Cuales1" >
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="Cuales2">Cuáles</label>
                                <input type="text" class="form-control" id="Cuales2" name="Cuales2" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <label class="label-cus" for="TOperaciones">Tipo de operaciones </label>
                            <select class="form-control" id="TOperaciones" name="TOperaciones">
                                <option value="c.c">Seleccione una opcion</option>
                                <option value="Importaciones">Importaciones</option>
                                <option value="Exportaciones">Exportaciones</option>
                                <option value="Prestamos">Prestamos</option>
                                <option value="Inversiones">Inversiones</option>
                                <option value="Giros/remesas">Giros/remesas</option>
                                <option value="Pago servicios">Pago servicios</option>
                                <option value="Otras">Otras</option>
                            </select>
                                @if ($errors->has('TOperaciones'))
                                    <p class="text-danger">{{ $errors->first('TOperaciones') }}</p>
                                @endif
                            </div>
                            <div class="form-group">
                                <label class="label-cus" for="ProductosME">Posee productos financieros en moneda extranjera  </label>
                                <select class="form-control" id="ProductosME" name="ProductosME">
                                    <option value="">Seleccione una opcion</option>
                                    <option value="1">Si</option>
                                    <option value="0">No</option>
                                </select>
                                @if ($errors->has('ProductosME'))
                                    <p class="text-danger">{{ $errors->first('ProductosME') }}</p>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="text-center mt-4">
                    <button class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/entidadesf">Guardar y Continuar
                    </button></div> 
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
