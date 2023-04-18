<?php 
// Incluir el archivo que contiene la conexión con la base de datos
  include("conexion_bd.php");

  // Recabar los datos enviados desde el formulario de la página admin.php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
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

  //  Sentencia para ingresar un registro 
  // https://www.w3schools.com/sql/sql_insert.asp
    $sql = "INSERT INTO Videojuegos (titulo, anio, director, clasificacion, distribucion, pais, idioma, plataformas, formato, almacenamiento) VALUES
    ('$titulo', '$anio', '$director', '$clasificacion', '$distribucion', '$pais', '$idioma', '$plataformas', '$formato', '$almacenamiento')";
    $consulta = mysqli_query($conn, $sql);

    // Reedireccionar a la página admin.php una vez insertado el registro
    if($consulta){
        Header("Location: admin.php");
    }
  }

  // Cerrar la conexión a la base de datosal finalizar
  mysqli_close($conn);
?>