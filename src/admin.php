<?php 
// Incluir el archivo database.php que contiene la conexión con la base de datos
  include("conexion_bd.php");
    
    // Consulta para extraer todos las columnas de la tabla Videojuegos
    $sql = "SELECT * FROM Videojuegos";
    $consulta = mysqli_query($conn, $sql);

// Cerrar la conexión al finalizar la consulta
  mysqli_close($conn);
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

<!-- Enviar los datos de este formulario al archivo agregar_videojuego.php -->
<form action="agregar_videojuego.php" method="post">

<label for="titulo">Titulo</label>
<input type="text" name="titulo" id="titulo" required>

<label for="anio">Año</label>
<input type="text" name="anio" id="anio" required>

<label for="director">Director</label>
<input type="text" name="director" id="director" required>

<label for="clasificacion">Clasificacion</label>
<input type="text" name="clasificacion" id="clasificacion" required>

<label for="distribucion">Distribucion</label>
<input type="text" name="distribucion" id="distribucion" required>

<label for="pais">Pais</label>
<input type="text" name="pais" id="pais" required>

<label for="idioma">Idioma</label>
<input type="text" name="idioma" id="idioma" required>

<label for="plataformas">Plataformas</label>
<input type="text" name="plataformas" id="plataformas" required>

<label for="formato">Formato</label>
<input type="text" name="formato" id="formato" required>

<label for="almacenamiento">Almacenamiento</label>
<input type="text" name="almacenamiento" id="almacenamiento" required>

<input type="submit" value="Enviar">

</form>

<h2>Catálogo de videojuegos</h2>

<!-- Tabla para mostrar los registros traidos por la consulta -->
<!-- https://developer.mozilla.org/es/docs/Learn/HTML/Tables/Basics -->
<table>
    <thead>
        <tr>
            <th>id</th>
            <th>titulo</th>
            <th>Año</th>
            <th>Director</th>
            <th>Clasificación</th>
            <th>Distribución</th>
            <th>País</th>
            <th>Idioma</th>
            <th>Plataformas</th>
            <th>Formato</th>
            <th>Almacenamiento</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>

        <!-- Recorrer todos las elementos de la consulta y crear una fila en la tabla por cada registro  -->
        <!-- Usando un bucle  https://www.php.net/manual/es/control-structures.while.php  -->
        <?php while($fila = mysqli_fetch_array($consulta)): ?>
        <tr>
        <th> <?= $fila['id'] ?></th>
        <th> <?= $fila['titulo'] ?></th>
        <th> <?= $fila['anio'] ?></th>
        <th> <?= $fila['director'] ?></th>
        <th> <?= $fila['clasificacion'] ?></th>
        <th> <?= $fila['distribucion'] ?></th>
        <th> <?= $fila['pais'] ?></th>
        <th> <?= $fila['idioma'] ?></th>
        <th> <?= $fila['plataformas'] ?></th>
        <th> <?= $fila['formato'] ?></th>
        <th> <?= $fila['almacenamiento'] ?></th>

        <!-- Elementos para editar y eliminar registros -->
        <!-- Pasar el id del registro como parámetro en la url del enlace -->
        <!-- https://support.google.com/google-ads/answer/6277564?hl=es-419 -->
        <th><a href="actualizar_videojuego.php?id=<?= $fila['id'] ?>">Editar</a></th>
        <th><a href="eliminar_videojuego.php?id=<?= $fila['id'] ?>">Eliminar</a></th>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
    
</body>
</html>
