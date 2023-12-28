function changeImageColor() {
    var fileInput = document.getElementById('Representacion');
    var image = document.getElementById('img1');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }


  function changeImageColor1() {
    var fileInput = document.getElementById('Rut');
    var image = document.getElementById('img2');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }

  function changeImageColor2() {
    var fileInput = document.getElementById('Declaracion');
    var image = document.getElementById('img3');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }

  function changeImageColor3() {
    var fileInput = document.getElementById('Bancaria');
    var image = document.getElementById('img4');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }

  function changeImageColor4() {
    var fileInput = document.getElementById('Financieros');
    var image = document.getElementById('img5');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }

  function changeImageColor5() {
    var fileInput = document.getElementById('CertificacionOEA');
    var image = document.getElementById('img6');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }

  function changeImageColor6() {
    var fileInput = document.getElementById('CertificadoBasc');
    var image = document.getElementById('img7');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }
  function changeImageColor7() {
    var fileInput = document.getElementById('Anexo');
    var image = document.getElementById('img8');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }

  function changeImageColor8() {
    var fileInput = document.getElementById('ConflitoInteres');
    var image = document.getElementById('img9');

    if (fileInput.files && fileInput.files[0]) {
      image.classList.add('image-green');
    } else {
      image.classList.remove('image-green');
    }
  }

// validaciones

    function validateFile() {
        const fileInput = document.getElementById('Representacion');
        const allowedExtensions = /(\.pdf)$/i;

        if (!allowedExtensions.exec(fileInput.value)) {
              
            
            alert('Solo se pueden subir archivos de tipo PDF.');
            fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
            return false;
        }else{
          changeImageColor();
        }
    }


    function validateFile1() {
      const fileInput = document.getElementById('Rut');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor1();
      }
    }

    function validateFile2() {
      const fileInput = document.getElementById('Declaracion');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor2();
      }
    }


    function validateFile3() {
      const fileInput = document.getElementById('Bancaria');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor3();
      }
    }


    function validateFile4() {
      const fileInput = document.getElementById('Financieros');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor4();
      }
    }


    function validateFile5() {
      const fileInput = document.getElementById('CertificacionOEA');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor5();
      }
    }


    function validateFile6() {
      const fileInput = document.getElementById('CertificadoBasc');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor6();
      }
    }


    function validateFile7() {
      const fileInput = document.getElementById('Anexo');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor7();
      }
    }



    function validateFile8() {
      const fileInput = document.getElementById('ConflitoInteres');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor8();
      }
    }


    function validateFile9() {
      const fileInput = document.getElementById('Brochure');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor9();
      }
    }

    function validateFile10() {
      const fileInput = document.getElementById('CB');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor10();
      }
    }


    function validateFile11() {
      const fileInput = document.getElementById('SG-SST');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor11();
      }
    }


    function validateFile12() {
      const fileInput = document.getElementById('Certificado_c');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor12();
      }
    }


    function validateFile13() {
      const fileInput = document.getElementById('Referencia_comercial2');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor13();
      }
    }

    function validateFile14() {
      const fileInput = document.getElementById('Listas_precios');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor14();
      }
    }


    function validateFile15() {
      const fileInput = document.getElementById('Condiciones_Comerciales');
      const allowedExtensions = /(\.pdf)$/i;

      if (!allowedExtensions.exec(fileInput.value)) {
            
          
          alert('Solo se pueden subir archivos de tipo PDF.');
          fileInput.value = ''; // Limpia el campo para que no se cargue el archivo incorrecto
          return false;
      }else{
        changeImageColor15();
      }
    }