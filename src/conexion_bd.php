<?php
// Cambiar los valores de las variables por los correpondientes a la instancia de la base de datos
$db_server = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASSWORD');
$db_name =getenv('DB_NAME');
$conn = "";
  try {
  $conn= mysqli_connect($db_server, $db_user,$db_pass,$db_name);
  // Enviar un mensaje si existe un error de conexión
  } catch (mysqli_sql_exception) {  
  echo "No se pudo contectar! <br>";
  }
?>