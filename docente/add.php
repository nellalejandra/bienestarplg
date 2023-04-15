<?php
  include_once('../config/config.php');
  include('docente.php');
  if (isset($_POST) && !empty($_POST)){
    /* SI EXISTE UN REGISTRO Y NO ESTA VACIO */
  
    $p= new docente(); /* LLAMO A MI LIBRO DE RECETAS */
  
    if ($_FILES['archivo']['name'] !== ''){
      $_POST['archivo'] = saveImage($_FILES);
    }
  
    $save = $p->save($_POST);
    if ($save) {
      $mensaje = '<div class="alert alert-success" role="alert"> Docente registrado </div>';
    }else{
      $mensaje='<div class="alert alert-danger" role="alert"> Error al registrar </div>';
    }


  }


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>sitioplg</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;800&family=Righteous&display=swap');
  </style>
  <script src="https://kit.fontawesome.com/1105e63917.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/estilo.css">
</head>

<body>

  <!-- barra navegación -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../Imagenes/logo.png" width="150" height="auto">
      </a>
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../capacitaciones.php">Capacitaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./add.php">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../admi.html">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  
  <?php 
      if (isset($mensaje)){
        echo $mensaje;
      }
?>

  <div class= "container" >
  <div class=row>
      <img src="../imagenes/profes3.png" class="img-fluid" alt="."> 
    </div>
    <h3 class=text-center> ingresa tu información </h3>
    <br>
    <br>
    
    
  
      <form method="POST" enctype="multipart/form-data">
        <div class=row mb-2>
          <div class = col>
            <label for="nombre"> Escribe tu nombre completo</label>
            <input type="text" name="nombre" id= "nombre" class=form-control> 
          </div>
          <br>
          <div class=col>
            <label for="cedula">Digita tu cédula</label>
            <input type="text" name="cedula" id="cedula" class=form-control > 
          </div>
        </div>
        <br>


        <div class= row mb-2>
          <div class= col>
            <label for="whatsapp">Escribe tu whatsapp</label>
            <input type="text" name="whatsapp" id="whatsapp" class=form-control> 
          </div>
          <br>

          <div class=col>
            <label for="gmail">Escribe tu gmail para googleclassroom</label> 
            <input type="mail" name="gmail" id="gmail" class=form-control> 
          </div>
          <br>
        </div>
        <div class=row>
          <div class=col>
              <label for="idiomas">¿Qué idiomas puedes enseñar? y ¿qué nivel tienes en cada uno? A1 A2 B1 B2</label>
              <textarea class="form-control" name="idiomas" id="idiomas" cols=50 rowa=5> </textarea>
          </div>
        </div>
        <br>

        <div class=col>
          <label for="examen">¿Estás certificado con algún examen internacional?</label>
            <select class="form-select" name="exam" id="exam">
              <option value="si">Si</option>
              <option value="no">No</option>
            </select> <br>
            <br>
        </div>

          <div class col>
            <label for="motivacion">¿Qué es lo que más te motiva al enseñar un idioma?</label>
            <textarea class="form-control" name="motivacion" id="motivacion" cols="50" rows="10"></textarea> <br>
          </div>

          <div class col>
            <label for="archivo"> Sube tus documentos de contratación</label>
            <input class="form-control" type="file" name="archivo" id="archivo"> 
            <br>
          </div>
          <button class="btn btn-success"> Registrar </button>
       </div>
      </form>



  </Div>
  <footer class="bg-body-tertiary">
    <div class="d-flex justify-content-between">
      <div class="p-2">
        <img src="../Imagenes/logo.png" alt="logo" width="100">
        <br> <br>
        <p> Creado por Nella Rodriguez</p>
      </div>

      <div class="p-2 d-flex flex-column mb-3">
        <h2> Redes sociales</h2>

        <a href="">
          <i class="fa-brands fa-facebook"></i> fa-facebook
        </a>
        <a href=""><i class="fa-brands fa-square-instagram"></i>instagram</a>
        <a href=""><i class="fa-brands fa-linkedin"></i>linkedin</a>
      </div>

      <div class="p-2 d-flex flex-column mb-3">
        <h2> Contacto</h2>
        <p><i class="fa-brands fa-whatsapp"></i> +573194136367</p>
        <p><i class="fa-solid fa-envelope"></i>academico@plgeducation.com</p>


      </div>
    </div>
  </footer>

    
</body>
</html>