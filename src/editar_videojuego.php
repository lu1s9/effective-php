<?php 
// Incluir el archivo que contiene la conexión con la base de datos
  include("conexion_bd.php");

  // Recabar los datos enviados desde el formulario de la página actualizar_videojuego.php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
   $titulo = $_POST['titulo'];
   $anio = $_POST['anio'];
   $director = $_POST['director'];
   $clasificacion = $_POST['clasificacion'];
   $distribucion = $_POST['distribucion'];
   $pais = $_POST['pais'];
   $idioma = $_POST['idioma'];
   $plataformas = $_POST['plataformas'];
   $formato = $_POST['formato'];
   $almacenamiento = $_POST['almacenamiento'];


    // Sentencia sql para actualizar registro
    // https://www.w3schools.com/mysql/mysql_update.asp
    $sql = "UPDATE Videojuegos SET titulo='$titulo', anio='$anio', director='$director', clasificacion='$clasificacion', distribucion='$distribucion',
    pais='$pais', idioma='$idioma', plataformas='$plataformas', formato='$formato', almacenamiento='$almacenamiento' WHERE id='$id'";
    
    $consulta = mysqli_query($conn, $sql);

    // Reedireccionar a la página admin.php una vez insertado el registro
    if($consulta){
        Header("Location: admin.php");
    }
  }

  // Cerrar la conexión a la base de datosal finalizar
  mysqli_close($conn);
?>