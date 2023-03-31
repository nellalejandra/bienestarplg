<?php

  include('../config/config.php');
  include('../config/database.php');

  Class docente{
    public $conexion;

    function __construct()
    {
        $db = new database();
        $this->conexion = $db->connectToDatabase();
       
    }

    function save($params) {

        
        $cedula = $params ['cedula'];
        $nombre = $params ['nombre'];
        $whatsapp = $params ['whatsapp'];
        $gmail = $params ['gmail'];
        $idiomas = $params ['idiomas'];
        $exam = $params ['exam'];
        $motivacion = $params ['motivacion'];
        $archivo = $params ['archivo'];

        $insert = "INSERT INTO docente VALUES(NULL,'$cedula','$nombre','$whatsapp','$gmail','$idiomas','$exam','$motivacion','$archivo' )";
        return mysqli_query($this->conexion, $insert);

    }

    function getall(){
      $sql= "SELECT * FROM docente";
      return mysqli_query($this->conexion, $sql);

    }

    function getOne ($id)
    {
      $sql ="SELECT * FROM docente where id=$id";
      return mysqli_query($this->conexion, $sql);

    }

    Function update ($params){
      $nombre = $params ['nombre'];
      $cedula = $params ['cedula'];
      $whatsapp = $params ['whatsapp'];
      $gmail = $params ['gmail'];
      $idiomas = $params ['idiomas'];
      $exam = $params ['exam'];
      $motivacion = $params ['motivacion'];
      $archivo = $params ['archivo'];
      $id = $params ['id'];
      
      $update = "UPDATE docente SET nombre='$nombre', cedula='$cedula', whatsapp='$whatsapp', gmail='$gmail', idiomas='$idiomas', exam='$exam', motivacion='$motivacion',archivo='$archivo' WHERE id=$id ";

      return mysqli_query($this->conexion, $update);
  
    }

    function delete ($id){
      $delete= "DELETE FROM docente WHERE id=$id ";
      return mysqli_query($this->conexion, $delete);


    }


  }


?>