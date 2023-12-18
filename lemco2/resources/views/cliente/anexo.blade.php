<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lemco</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/anexos.css') }}">
  <link rel="icon" href="{{ asset('images/fevicon.jpeg') }}" type="image/png" />

  <style>

    </style>
</head>
<body>
<div class="container">
        <div class="row mb-3">
            <div class="col-md-12">
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
            </div>
        </div>
        <form action="" method="post" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="card col-sm-12">
            <div class="row">
                <div class="col-md-12 mb-5">
                   <div class="text-center">
                    <h1 class="text-primary h1_tit" >Documentos Anexos</h1>
                    </div>
                    <p class="text_main">Por favor adjunte la siguiente Información.</p>
                </div>
                <div class="col-md-12 mb-4">
                  <div class="div_main">
                    <div class="div_inside">
                        <p class="div_p">Formulario único vinculacion y Actualización de clientes y proveedores <span>*</span></p>
                        @if ($errors->has('camara_comercio'))
                            <p class="text-danger">{{ $errors->first('camara_comercio') }}</p>
                        @endif
                        <div class="div_img">
                          <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img1" class="img-fluid" onclick="document.getElementById('camara_comercio').click()">
                          <input type="file" id="camara_comercio" name="camara_comercio" style="display:none; " onchange="validateFile()">
                        </div>
                    </div>


                    <div class="div_inside">
                      <p class="div_p">Formulario de autorización para el tratamiento de datos personales de terceros<span>*</span></p>
                      @if ($errors->has('Rut'))
                            <p class="text-danger">{{ $errors->first('Rut') }}</p>
                      @endif
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img2"  class="img-fluid" onclick="document.getElementById('Rut').click()">
                        <input type="file" id="Rut" name="Rut" style="display:none;" onchange="validateFile1()">
                      </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Formato declaracion origen de fondos<span>*</span></p>
                      @if ($errors->has('CC'))
                            <p class="text-danger">{{ $errors->first('CC') }}</p>
                      @endif
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img3" class="img-fluid" onclick="document.getElementById('CC').click()" >
                        <input type="file" id="CC" name="CC" style="display:none;" onchange="validateFile2()">
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-md-12 mb-5">
                  <div class="div_main">

                    <div class="div_inside">
                      <p class="div_p">Formato autorización de consultas y reporte a operadpres de bases de datos<span></span></p>
                      @if ($errors->has('FAA'))
                            <p class="text-danger">{{ $errors->first('FAA') }}</p>
                      @endif
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" id="img4" alt="Imagen" class="img-fluid" onclick="document.getElementById('FAA').click()">
                        <input type="file" id="FAA" name="FAA" style="display:none;" onchange="validateFile3()">
                      </div>
                    </div>

                    <div class="div_inside">
                      <p class="div_p">Formato para el conocimiento de personas expuestas o reconocidas politicamente "peps"<span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img5" class="img-fluid" onclick="document.getElementById('RC').click()">
                        <input type="file" id="RC" name="RC" style="display:none;" onchange="validateFile4()">
                        </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Declaracion de confictos de interes<span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img6" class="img-fluid" onclick="document.getElementById('RRI').click()">
                        <input type="file" id="RRI" name="RRI" style="display:none;" onchange="validateFile5()">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-5">
                  <div class="div_main">
                    <div class="div_inside">
                      <p class="div_p">Formato de facturacion electronica (solo aplica para clientes )<span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img7" class="img-fluid" onclick="document.getElementById('GC').click()">
                        <input type="file" id="GC" name="GC" style="display:none;"  onchange="validateFile6()">
                    </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Cotización y/o Propuesta de negocio<span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img8" class="img-fluid" onclick="document.getElementById('AF').click()">
                        <input type="file" id="AF" name="AF" style="display:none;"  onchange="validateFile7()">
                    </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Fotocopia del documento de identidad del Representante legal al 150% <span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img9" class="img-fluid" onclick="document.getElementById('ICA').click()">
                        <input type="file" id="ICA" name="ICA" style="display:none;"  onchange="validateFile8()">
                    </div>
                    </div>
                  </div>
                </div>
                <div class="col-md-12 mb-5">
                    <div class="div_main">
                        <div class="div_inside">
                      <p class="div_p">Registro Único Tributario Del año presente(todas las hojas) <span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img10" class="img-fluid" onclick="document.getElementById('Brochure').click()">
                        <input type="file" id="Brochure" name="Brochure" style="display:none;"  onchange="validateFile9()">
                    </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Cámara de Comercio menor a 30 dias o documento de existencia  y repres legal<span>*</span></p>
                      @if ($errors->has('CB'))
                            <p class="text-danger">{{ $errors->first('CB') }}</p>
                      @endif
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img11" class="img-fluid" onclick="document.getElementById('CB').click()">
                        <input type="file" id="CB" name="CB" style="display:none;"  onchange="validateFile10()">
                    </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Certificación Bancaria menor a 30 dias<span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img12" class="img-fluid" onclick="document.getElementById('SG-SST').click()">
                        <input type="file" id="SG-SST" name="SG-SST" style="display:none;"  onchange="validateFile11()">
                    </div>
                    </div>
                    </div>
                </div>
                <div class="col-md-12 mb-5">
                    
                     <div class="div_main">
                     <div class="div_inside">
                      <p class="div_p">Estado Financiero con las respectivas notas a corte 31 diciembre año inmediatamente anterior (Dictaminado y Certificado) <span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img13" class="img-fluid" onclick="document.getElementById('Certificado_c').click()">
                        <input type="file" id="Certificado_c" name="Certificado_c" style="display:none;"  onchange="validateFile12()">
                    </div>
                    </div>
                    <div class="div_inside">
                        <p class="div_p">Fotocopia Tarjeta Profesional del Contador y/o Revisor Fiscal <span></span></p>
                        <div class="div_img">
                          <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img14" class="img-fluid" onclick="document.getElementById('Referencia_comercial2').click()">
                          <input type="file" id="Referencia_comercial2" name="Referencia_comercial2" style="display:none;"  onchange="validateFile13()">
                      </div>
                      </div>

                      <div class="div_inside">
                      <p class="div_p">Declaración Renta Presentado en los dos últimos años<span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img12" class="img-fluid" onclick="document.getElementById('SG-SST').click()">
                        <input type="file" id="SG-SST" name="SG-SST" style="display:none;"  onchange="validateFile11()">
                    </div>
                    </div>

                  </div>
                  </div>
                  <div class="col-md-12 mb-5">
                    
                    <div class="div_main">
                    <div class="div_inside">
                     <p class="div_p">Certificado de Composición accionaria  hasta persona natural <span></span></p>
                     <div class="div_img">
                       <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img13" class="img-fluid" onclick="document.getElementById('Certificado_c').click()">
                       <input type="file"  id="Certificado_c" name="Certificado_c" style="display:none;"  onchange="validateFile12()">
                   </div>
                   </div>
                   <div class="div_inside">
                       <p class="div_p">Certificaciones  Comerciales (minimo 3) <span></span></p>
                       <div class="div_img">
                         <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img14" class="img-fluid" onclick="document.getElementById('Referencia_comercial2').click()">
                         <input type="file" id="Referencia_comercial2" name="Referencia_comercial2" style="display:none;"  onchange="validateFile13()">
                     </div>
                     </div>

                     <div class="div_inside">
                     <p class="div_p">Certificación de Implementación de un sistema  antilavado de activo y contra la financiación terrorismo (SARLAFT y/o SAGRILAFT)<span></span></p>
                     <div class="div_img">
                       <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img12" class="img-fluid" onclick="document.getElementById('SG-SST').click()">
                       <input type="file" id="SG-SST" name="SG-SST" style="display:none;"  onchange="validateFile11()">
                   </div>
                   </div>

                   </div>


                 </div>
                 </div>
                 <div class="row mb-4">
                <div class="col-md-12">
                    <div class="div_continuar">
                        <button class="btn " style="background-color: #193b64; color: #93c353;">Finalizar</button>
                    </div>
                </div>
            </div>
                </div>
                

                </div>
            </div>
            
        </form>
        </div>
</div>

<script>
    function validateFile() {
        const fileInput = document.getElementById('camara_comercio');
        const allowedExtensions = /(\.pdf)$/i;

        if (!allowedExtensions.exec(fileInput.value)) {
            alert('Solo se pueden subir archivos de tipo PDF.');
            fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
            return false;
        }else{
          changeImageColor();
        }
    }
</script>
<script>
    document.getElementById("myForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Evita el envío predeterminado del formulario
        let val1 = document.getElementById("camara_comercio").value;
        let val2 =document.getElementById("Rut").value;
        let val3 =document.getElementById("CC").value;
        let val4 =document.getElementById("CB").value;
        if(val1 != '' && val2 != '' && val3 != '' && val4 != ''){
            document.getElementById("myForm").submit();
        }else {
            alert("Faltan archivos requeridos");
        }

    });


</script>



</body>
</html>
