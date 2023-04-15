<?php

  include_once('config/functions.php');


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
  <link rel="stylesheet" href="CSS/estilo.css">
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
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
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
      <div class="col-lg-4 col-md-6 col-sm-6 d-flex align-items-center ">
        <h1>
          ¡Bienvenido a ser parte del equipo PLG!
        </h1>
      </div>
      <div class="col-lg-8 col-md-6 col-sm-6 d-flex justify-content-center">
        <img src="./Imagenes/happy teacher.png" width="400px" class="img-fluid mx-auto">
      </div>
    </div>
  </div>
  <br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="./Imagenes/2.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./Imagenes/3.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="./Imagenes/4.png" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>
      </div>
      <div
        class="col-lg-8 col-md-6 col-sm-12 d-flex align-items-center d-flex justify-content-center d-flex flex-column mb-3">
        <div class="p-2">
          <h4>Ser parte del equipo PLG es contar con apoyo, respaldo y acompañamiento constante.
            Queremos que aproveches todas las herramientas que tenemos a tu disposición. para empezar realiza tu
            registro en nuestra base docente.
          </h4>

        </div>
        <div class="p-2">
          <button type="button" class="btn btn-info" href="./docente/add.php">Registrarse
            
          </button>

        </div>
      </div>
    </div>
    </div>

    <div class="container">
      <div class="row">
        <div>
          <h3 class=text-center> Beneficios de ser profe PLG  </h3>

        </div>
      </div>

      <br>

    
    </div>
    <div class="row">
     <img src="./imagenes/profes4.png" class="img-fluid" alt="."> 
    </div>

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
</Body>

</html>