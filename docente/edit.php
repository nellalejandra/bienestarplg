<?php
  include_once('../config/config.php');
  include('docente.php');
 
  $p = new docente();
  $dp =  mysqli_fetch_object($p->getOne($_GET['id']));

  if (isset($_POST) && !empty($_POST)){
    $_POST['archivo'] = $dp->archivo;
    if ($_FILES['archivo']['name'] !== ''){
      $_POST['archivo'] = saveImage($_FILES);
    }
    $update = $p->update($_POST);
    if ($update){
      $mensaje= '<div class="alert alert-success" role="alert"> Docente modificado con exito</div>';
    }else{
      $mensaje= '<div class="alert alert-danger" role="alert" > error modificación</div>'; 
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
              <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../capacitaciones.php">Capacitaciones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./add.php">Registrarse</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="index.php">Editar Registro</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <br>
  <br>
  <?php
    if (isset($mensaje)){
      echo $mensaje;
    }
    ?>
  <Div class= "container" >
    <H1 class=text-center> modificar información docente </H1>
    <br>
    <br>
      <form method="POST" enctype="multipart/form-data">
        <div class=row mb-2>
          <div class = col>
            <label for="nombre"> Escribe tu nombre completo</label>
            <input type="text" name="nombre" id= "nombre" class=form-control value="<?= $dp->nombre?>"> 
            <input type="hidden" name="id" value="<?= $dp->id?>">
          </div>
          <br>
          <div class=col>
            <label for="cedula">Digita tu cédula</label>
            <input type="text" name="cedula" id="cedula" class=form-control value="<?= $dp->cedula?>"> 
          </div>
        </div>
        <br>


        <div class= row mb-2>
          <div class= col>
            <label for="whatsapp">Escribe tu whatsapp</label>
            <input type="text" name="whatsapp" id="whatsapp" class=form-control value="<?= $dp->whatsapp?>"> 
          </div>
          <br>

          <div class=col>
            <label for="gmail">Escribe tu gmail para googleclassroom</label> 
            <input type="mail" name="gmail" id="gmail" class=form-control value="<?= $dp->gmail?>"> 
          </div>
          <br>
        </div>
        <div class=row>
          <div class=col>
              <label for="idiomas">¿Qué idiomas puedes enseñar? y ¿qué nivel tienes en cada uno? A1 A2 B1 B2</label>
              <textarea class="form-control" name="idiomas" id="idiomas" cols=50 rowa=5 > <?= $dp->idiomas?></textarea>
          </div>
        </div>
        <br>

        <div class=col>
          <label for="examen">¿Estás certificado con algún examen internacional?</label>
            <select class="form-select" name="exam" id="exam" <?= $dp->whatsapp?>>
              <option value="si">Si</option>
              <option value="no">No</option>
            </select> <br>
            <br>
        </div>

          <div class col>
            <label for="motivacion">¿Qué es lo que más te motiva al enseñar un idioma?</label>
            <textarea class="form-control" name="motivacion" id="motivacion" cols="50" rows="10" > <?= $dp->motivacion?></textarea> <br>
          </div>

          <div class col>
            <label for="archivo"> Sube tus documentos de contratación</label>
            <input class="form-control" type="file" name="archivo" id="archivo" value="<?= $dp->archivo?>" > 
            <br>
          </div>
          <button class="btn btn-success"> Modificar </button>
       </div>
      </form>



  </Div>


    
</body>
</html>