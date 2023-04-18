<?php 
// Incluir el archivo que contiene la conexión con la base de datos
  include("conexion_bd.php");

  // Obtener el id del videojuego pasado por el parámetro de url
  $id = $_GET['id'];

  // Sentencia para eliminar el videojuego mediante su id
  $sql = "DELETE FROM Videojuegos WHERE id='$id'";

  $consulta = mysqli_query($conn, $sql);

  // Redireccionar a la página admin.php una vez insertado registro
  if($consulta){
    Header("Location: admin.php");
  }

  // Cerrar la conexión a la base de datosal finalizar
  mysqli_close($conn);
?>