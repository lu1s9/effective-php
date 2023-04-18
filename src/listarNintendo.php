<?php 
// Incluir el archivo database.php que contiene la conexión con la base de datos
  include("conexion_bd.php");
   
      // Consulta para extraer todos las columnas de la tabla Videojuegos que contengan la palabra nintendo en la columna plataformas
    $sql = "SELECT * FROM Videojuegos WHERE plataformas LIKE '%nintendo%'";
    $consulta = mysqli_query($conn, $sql);

    // Cerrar la conexion con la base de datos
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

    <h1>Lista de videojuegos de nintendo:</h1>

<!-- Tabla para mostrar los registros traidos por la consulta -->
<!-- https://developer.mozilla.org/es/docs/Learn/HTML/Tables/Basics -->
    <table>
        <thead>
            <tr>
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
            </tr>
        </thead>
        <tbody>

        <!-- Recorrer todos las elementos de la consulta y crear una fila en la tabla por cada registro  -->
        <!-- Usando un bucle  https://www.php.net/manual/es/control-structures.while.php  -->
            <?php while($fila = mysqli_fetch_array($consulta)): ?>
            <tr>
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
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>