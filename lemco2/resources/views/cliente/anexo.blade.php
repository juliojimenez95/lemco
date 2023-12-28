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
        <form action="{{ route('anexo.store',$id) }}" method="post" enctype="multipart/form-data" id="myForm">
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
                        <p class="div_p">Certificado de Existencia y Representación Legal, expedición máxima de 60 días calendario (para persona jurídica)*</p>
                        @if ($errors->has('Representacion'))
                            <p class="text-danger">{{ $errors->first('Representacion') }}</p>
                        @endif
                        <div class="div_img">
                          <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img1" class="img-fluid" onclick="document.getElementById('Representacion').click()">
                          <input type="file" id="Representacion" name="Representacion" style="display:none; " onchange="validateFile()">
                        </div>
                    </div>


                    <div class="div_inside">
                      <p class="div_p">Rut actualizado*</p>
                      @if ($errors->has('Rut'))
                            <p class="text-danger">{{ $errors->first('Rut') }}</p>
                      @endif
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img2"  class="img-fluid" onclick="document.getElementById('Rut').click()">
                        <input type="file" id="Rut" name="Rut" style="display:none;" onchange="validateFile1()">
                      </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Declaración de Renta último año*</p>
                      @if ($errors->has('Declaracion'))
                            <p class="text-danger">{{ $errors->first('Declaracion') }}</p>
                      @endif
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img3" class="img-fluid" onclick="document.getElementById('Declaracion').click()" >
                        <input type="file" id="Declaracion" name="Declaracion" style="display:none;" onchange="validateFile2()">
                      </div>
                    </div>

                  </div>
                </div>

                <div class="col-md-12 mb-5">
                  <div class="div_main">

                    <div class="div_inside">
                      <p class="div_p">Certificación bancaria no mayor a 30 días*</p>
                      @if ($errors->has('Bancaria'))
                            <p class="text-danger">{{ $errors->first('Bancaria') }}</p>
                      @endif
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" id="img4" alt="Imagen" class="img-fluid" onclick="document.getElementById('Bancaria').click()">
                        <input type="file" id="Bancaria" name="Bancaria" style="display:none;" onchange="validateFile3()">
                      </div>
                    </div>

                    <div class="div_inside">
                      <p class="div_p">Estados Financieros comparativos del último año (Balance General, Estado de Resultados, Flujo de Caja y notas)*</p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img5" class="img-fluid" onclick="document.getElementById('Financieros').click()">
                        <input type="file" id="Financieros" name="Financieros" style="display:none;" onchange="validateFile4()">
                        </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Empresas Sky únicamente: Certificación OEA, ISO y/o SST (en caso de contar con alguna o todas las certificaciones)<span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img6" class="img-fluid" onclick="document.getElementById('CertificacionOEA').click()">
                        <input type="file" id="CertificacionOEA" name="CertificacionOEA" style="display:none;" onchange="validateFile5()">
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-12 mb-5">
                  <div class="div_main">
                    <div class="div_inside">
                      <p class="div_p">Empresas Sky únicamente: Certificado Basc (si cuenta con ello) , de lo contrario diligenciar acuerdo de seguridad</p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img7" class="img-fluid" onclick="document.getElementById('CertificadoBasc').click()">
                        <input type="file" id="CertificadoBasc" name="CertificadoBasc" style="display:none;"  onchange="validateFile6()">
                    </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Empresas Sky únicamente:  Diligenciar Anexo 1.</p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img8" class="img-fluid" onclick="document.getElementById('Anexo').click()">
                        <input type="file" id="Anexo" name="Anexo" style="display:none;"  onchange="validateFile7()">
                    </div>
                    </div>
                    <div class="div_inside">
                      <p class="div_p">Formato de declaración y reporte de conflito de interes (si aplica) <span></span></p>
                      <div class="div_img">
                        <img src="{{ asset('images/Subir-PDF.png') }}" alt="Imagen" id="img9" class="img-fluid" onclick="document.getElementById('ICA').click()">
                        <input type="file" id="ICA" name="ICA" style="display:none;"  onchange="validateFile8()">
                    </div>
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
  <script src="{{ asset('js/documento.js') }}"></script>
<script>
    function validateFile() {
        const fileInput = document.getElementById('Representacion');
        const allowedExtensions = /(\.pdf)$/i;
        if (!allowedExtensions.exec(fileInput.value)) {
            alert('Solo se pueden subir archivos de tipo PDF.');
            fileInput.value = ''; 
            return false;
        }else{
          changeImageColor();
        }
    }
</script>
</body>
</html>
