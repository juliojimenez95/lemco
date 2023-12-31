<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lemco</title>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <link rel="stylesheet" href="{{ asset('css/identificacion.css') }}">

</head>
<body>
  <div class="container-fluid">
    <div class="row mb-5">
      <div class="col-md-12">
        <div class="text-center">
          <img src="https://formacion.lemco.co/pluginfile.php/1/theme_edly/main_logo/1694462261/logo%20lemco.png"   class=" my-4 img-fluid">
          <h1 class="text-primary h1_tit">Identificación</h1>
          <hr class="underline">
        </div>
      </div>
    </div>


    <div class="row" style="margin-top: 35px;">

      <div class="col-md-6 " style="background-color: #193b64; height: 250px; ">
          <div class="image3">
              <img src="{{ asset('images/Persona-Natural.png') }}" class="image-clas1" alt="">
          </div>
            <a href="/cliente">
            <h1 class="text-center my-4  titulo_izquierda"  style="vertical-align: middle; color: #93c353;">Clientes</h1>
            </a>
      </div>
      <div class="col-md-6 " style="background-color: #93c353; height: 250px; ">
          <div class="image3">
            <img src="{{ asset('images/Información-Bancaria.png') }}" class="image-clas2" alt="">
          </div>
            <a href="/proveedore">
            <h1 class="text-center my-4 titulo_izquierda" style="vertical-align: middle; color: #193b64;">Proveedores</h1>
            </a>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper-base.min.js"
    integrity="sha384-EQhgPShYZDmf+OWKvoYf70b91G/J0xgfgvbXhNfP60ZQLPv6du/0h0sU6Ygr19d0"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
