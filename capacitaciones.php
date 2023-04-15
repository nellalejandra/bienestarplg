<?php

  include('config/functions.php');
  


?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bienestar PLG</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;600;800&family=Righteous&display=swap');
  </style>
  <script src="https://kit.fontawesome.com/1105e63917.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/Estilocapa.css">
</head>

<body>
  <!-- barra navegación -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="./Imagenes/logo.png" width="150" height="auto">
      </a>
      <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="./index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./capacitaciones.php">Capacitaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./docente/add.php">Registrarse</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./admi.html">Admin</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <br>
  <br>

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 d-flex align-items-center d-flex flex-column mb-3 ">
        <h2>
          Capacitación TOEFL 1
        </h2>
        <p>En esta capacitación nuestro capacitador steven Ariza nos comparte toda la información inicial respecto a la estructura del TOEFL, cuales son sus partes, qué duración tiene, cómo es su calificación, qué partes del examen son las más complejas y los tips iniciales para poder hacer una excelente preparación.
        </p>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/FXTQq7Ojp94" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 ">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/ljlL4KM0Nu8" title="YouTube video player"
          frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowfullscreen></iframe>
      </div>
      <br>
      <br>
      <br>
      <div class="col-lg-6 col-md-6 col-sm-12 d-flex justify-content-center d-flex flex-column mb-3  ">
        <h2>
          Capacitación TOEFL 2
        </h2>
        <p>En esta capacitación podrás aprender cómo preparar el TOEFL, conocerás las herramientas y materiales que PLG ponme a tu alcance para las clases con este enfoque. 
          Te presentaremos el plan de estudio y te xplicaremos cómo usarlo de acuerdo al perfil y necesidad de tus estudiantes. 
        </p>
      </div>

    </div>
    </div>
    <br>
    
 <div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center">
      <h2> Capacitadores</h2>
    </div>
  </div>
 </div>
 <br>
 <div class="container d-flex justify-content-center">
  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12 ">
      <img src="./Imagenes/8.png" width="200" height="auto" alt="Capacitador1">
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 ">
      <img src="./Imagenes/7.png" width="200" height="auto" alt="Capacitador1">
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 ">
      <img src="./Imagenes/6.png" width="200" height="auto" alt="Capacitador1">
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 ">
      <img src="./Imagenes/5.png" width="200" height="auto" alt="Capacitador1">
    </div>
  </div>
 </div>
<br>
<br>




  <footer class="bg-body-tertiary">
    <div class="d-flex justify-content-between">
      <div class="p-2">
        <img src="./Imagenes/logo.png" alt="logo" width="100">
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>
</html>