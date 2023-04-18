<?php 
// Incluir el archivo que contiene la conexión con la base de datos
  include("conexion_bd.php");

//   Obtener el id del videojuego del parámetro de la url
  $id = $_GET['id'];

  $sql = "SELECT *  FROM Videojuegos WHERE id='$id'";

  $consulta = mysqli_query($conn, $sql);
  $fila = mysqli_fetch_array($consulta);

  // Cerrar la conexión a la base de datos al finalizar
//   mysqli_close($conn); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Enviar los datos al archivo editar_videojuego.php  -->
<form action="editar_videojuego.php" method="post">


<!-- Mostrar el formulario con los valores ya existentes de la base de datos -->
<input type="hidden" name ="id" value="<?= $fila['id'] ?>">

<label for="titulo">Titulo</label>
<input type="text" name="titulo" id="titulo" value="<?= $fila['titulo'] ?>" required >

<label for="anio">Año</label>
<input type="text" name="anio" id="anio" value="<?= $fila['anio'] ?>" required>

<label for="director">Director</label>
<input type="text" name="director" id="director" value="<?= $fila['director'] ?>" required>

<label for="clasificacion">Clasificacion</label>
<input type="text" name="clasificacion" id="clasificacion" value="<?= $fila['clasificacion'] ?>" required>

<label for="distribucion">Distribucion</label>
<input type="text" name="distribucion" id="distribucion" value="<?= $fila['distribucion'] ?>" required>

<label for="pais">Pais</label>
<input type="text" name="pais" id="pais" value="<?= $fila['pais'] ?>" required>

<label for="idioma">Idioma</label>
<input type="text" name="idioma" id="idioma" value="<?= $fila['idioma'] ?>" required>

<label for="plataformas">Plataformas</label>
<input type="text" name="plataformas" id="plataformas" value="<?= $fila['plataformas'] ?>" required>

<label for="formato">Formato</label>
<input type="text" name="formato" id="formato" value="<?= $fila['formato'] ?>" required>

<label for="almacenamiento">Almacenamiento</label>
<input type="text" name="almacenamiento" id="almacenamiento" value="<?= $fila['almacenamiento'] ?>" required>

<input type="submit" value="Editar">

</form>
    
</body>
</html>