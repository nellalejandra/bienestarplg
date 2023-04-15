<?php
    include_once('../config/config.php');
    include('docente.php');
    $p = new docente();
    $data = $p-> getall();

    if(isset($_GET['id']) && !empty($_GET['id'])){
      $remove= $p->delete($_GET['id']);
        if($remove){
            header('location: index.php');
        }else{
            $mensaje='<div class="alert alert-damage" rol="alert"> Error al eliminar </div>';
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
  <link rel="stylesheet" href="CSS/estilo.css">
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
              <a class="nav-link active" aria-current="page" href="../index.php">Inicio</a>
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
  <br>
  <br>

    <div Class="container">
        <h1 class=text-center> Listado docentes </h1>
        <div class="row">
            <?php

while ($pt= mysqli_fetch_object($data)){
      echo "<div class='col-6'>";
         echo "<div class='border border-info p-2'>";
                        echo "<h5>Cedula: $pt->cedula </h5>";
                        echo "<p>Nombre: $pt->nombre 
                        <br>Whatsapp:$pt->whatsapp 
                        <br>Gmail:$pt->gmail 
                        <br>Idioma:$pt->idiomas </p>";
                        echo "<div class='center'> <a class='btn btn-success' href='". ROOT ."/docente/edit.php?id=$pt->id' >Modificar</a> - <a class='btn btn-danger' href='". ROOT ."/docente/index.php?id=$pt->id' >Eliminar</a> </div>";
                    
                        echo "</div>";
                    echo "</div>";
         




            }

            


            ?>

        </div>


    </div>
    
</body>
</html>