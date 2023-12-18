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
                    <h2 class="text-center h1_cus">10. AUTORIZACIÓN CONSULTA Y REPORTE EN CENTRALES DE RIESGO  </h2>  <br>
                    <p class="p_cus">Con la firma del presente formulario y actuando libre y voluntariamente autorizo de manera previa y expresa a Lemco S.A.S., Challenger S.A.S, Operadora Habitel S.A.S, Habitel S.A.S, Fundación Challenger, Sky Forwarder S.A.S, Sky Industrial S.A.S, Sky Logística Integral S.A.S y Sky Electronics Zona Franca S.A.S  y/o a quien represente sus derechos u ostenten en el futuro la calidad de acreedor, para: <br><br>
                        1. Consultar, en cualquier tiempo en las centrales de riesgos toda la información relevante para conocer mi desempeño como deudor, mi capacidad de pago o para valorar el riesgo futuro de concederme un crédito. <br>
                        2. Reportar ante las mismas Entidades y cualquier otra que maneje banco de datos acerca del cumplimiento de las obligaciones financieras que se generen de la relación comercial de la razón social que represento en cualquier tiempo, información que podrá ser consultada de acuerdo a los lineamientos de la Ley 1266 de 2008, Ley 2157 de 2021 o normas que la modifiquen, adicionen o sustituyan.<br>
                        3. Enviar la información mencionada a las centrales de riesgos de manera directa y también por intermedio de las entidades públicas que ejercen funciones de vigilancia y control, con el fin de que estas puedan tratarla, analizarla, clasificarla y luego suministrarla a dichas centrales. <br>
                        4. Conservar las debidas actualizaciones y durante el periodo necesario la información indicada en los literales 2 y 5 de esta autorización. <br>
                        5. Suministrar a las centrales de información de riesgo datos relativos a mis solicitudes de crédito, así como otros atinentes a mis relaciones comerciales, financieras y en general socioeconómicas que yo haya entregado o que conste en documentos públicos.</p>
                    <div class="row">
                  
                        <div class="col-md-12">
              
                             <center>
                            <strong class="text-primary justify-content-center">
                            <label class="op_cus">AUTORIZO <input type="radio" name="grupo5" value="1"></label>
                            <label class="op_cus">NO AUTORIZO <input type="radio" name="grupo5" value="0"></label>
                            </strong>
                            </center>
                        </div>
                        </div>
                        <hr class="underline under_s">
                        <div class="row">
                        <div class="col-md-12">
                        <p class="p_cus">Con la firma del presente formulario me comprometo a declarar de manera oportuna, completa y veraz los conflictos de intereses que tengamos frente a cualquiera de sus Socios, Directivos, Representantes y/o Empleados, en lo relación con: </p>
                        <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="color-cs">1. Guarda relación de parentesco que represente algún tipo de interés economico con algún empleado de las Empresas del Grupo Lemco?  </span>
                        </div>
                        <div class="">
                          <label class="mr-2 color-cb" >Si <input type="radio" name="grupo1" value="Si"></label>
                          <label class="mr-2 color-cb" >No <input type="radio" name="grupo1" value="No"></label>
                        </div>


                  </div>
                </div>
                

                <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="color-cs">2. Le han requerido dádivas, regalos o mercancía para iniciar la relación comercial con Empresas del Grupo Lemco?  </span>
                        </div>
                        <div class="">
                          <label class="mr-2 color-cb" >Si <input type="radio" name="grupo1" value="Si"></label>
                          <label class="mr-2 color-cb" >No <input type="radio" name="grupo1" value="No"></label>
                        </div>


                  </div>
                </div>

                <div class="form-group">
                  <div style="display: flex; justify-content: space-between;">
                        <div class="">
                          <span class="color-cs">3. Existe alguna situación que pudiera afectar su objetividad o indepencia en la relación comercial? </span>
                        </div>
                        <div class="">
                          <label class="mr-2 color-cb" >Si <input type="radio" name="grupo1" value="Si"></label>
                          <label class="mr-2 color-cb" >No <input type="radio" name="grupo1" value="No"></label>
                        </div>
                  </div>
                </div>

                <p class="p_cus">En caso positivo de algunas de las tres preguntas, anexaré diligenciado el formulario de declaración y reporte de conflito de interes
De igual forma, acepto de manera voluntaria o inequívoca para que una o varias de las Empresas del Grupo Lemco se reserven el derecho de verificar la documentación e información facilitada en el proceso de vinculación o actualización. </p>

              <div class="row justify-content-center " style="margin-top: 47px;">
                <div class="col-md-6 text-center">
                <a class="text-center btn" style="background-color: #193b64; color: #93c353;"  href="/firma">Guardar y Continuar
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
