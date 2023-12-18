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
                    <h2 class="text-center h1_cus">8. DECLARACIÓN DE ORIGEN DE FONDOS *</h2> <br>
                    <p class="p_cus">Con la firma del presente formulario y con el fin de establecer relaciones comerciales con una o varias Empresas del Grupo Lemco de manera voluntaria y libre, declaro expresamente que:
                            <br><br>
                        1. Los recursos y fondos utilizados para el desarrollo de la relación comercial provienen de la actividad económica registrada en este formulario. <br>
                        2. Los recursos e ingresos generados provienen de actividades lícitas. <br>
                        3. No admito ni admitiré que terceros efectúen depósitos a título personal ni de la razón social que represento con fondos provenientes de actividades ilícitas, ni efectuaré transacciones destinadas a tales actividades o a favor de personas relacionadas con las mismas.   <br>                                                                    
                        4. Contamos con todos los procesos legales para la comercialización nacional e internacional de todos sus productos y servicios, así como los respectivos soportes de cumplimiento normativo. <br>
                        5. La razón social que represento o sus administradores, beneficiarios finales o colaboradores no se encuentran vinculados a procesos de lavado de activos y financiación del terrorismo. <br> 
                        6. En caso que estemos obligados a implementar un Sistema de Prevención de Lavado de Activos y Financiación del Terrorismo y/o un Programa de Transparencia y Ética Empresarial, suministraremos como parte de los documentos de vinculación o actualización la respectiva certificación. <br>

                        Por lo anterior, declaro que eximo a todas las Empresas del Grupo Lemco de toda responsabilidad que se derive por la información errónea, falsa, inexacta que hubiere proporcionado u omitido en este documento o cualquier otro entregado para su proceso de vinculación de clientes y si la razón social que represento o alguno de sus administradores, beneficiarios finales o colaboradores llegaren a ser señalados directa y/o públicamente por cualquier medio de difusión nacional o internacional o investigados por delitos de Lavado de Activos y Financiación del Terrorismo, autorizo para que se considere como una causal objetiva para terminar unilateralmente la relación comercial o contractual sin previo aviso. Así mismo, la razón social que represento mantendrá indemne, libre de daño al Grupo Lemco o cualquiera de sus Empresas y se obliga a responder por cualquier multa, daño o perjuicio que sufra por o con ocasión del incumplimiento de las normas de Prevención al Lavado de Activos, Financiación al Terrorismo, Corrupción / Soborno Transnacional. Finalmente, autorizo a cruzar en cualquier momento la información de la razón social que represento, sus administradores y/o beneficiarios finales, en sus bases de datos con las listas públicas nacionales e internacionales para la prevención de estos delitos, de manera directa o por contratación de un tercero. </p>
                    <div class="row">
                  
                        <div class="col-md-12">
              
                             <center>
                            <strong class="text-primary justify-content-center">
                            <label class="op_cus">Si <input type="radio" name="grupo5" value="1"></label>
                            <label class="op_cus">No <input type="radio" name="grupo5" value="0"></label>
                            </strong>
                            </center>

              <div class="row justify-content-center " style="margin-top: 47px;">
                <div class="col-md-6 text-center">
                <a class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/autorizacion">Guardar y Continuar
                    </a>
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
