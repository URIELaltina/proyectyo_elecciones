<?php

$consulta = "SELECT * FROM candidatos";

$resultado = mysqli_query($conexion, $consulta);

if ($resultado) {
  while ($fila = mysqli_fetch_assoc($resultado)) {
    echo "ID: " . $fila["id"] . " - Nombre: " . $fila["nombre"] . "<br>";
  }
} else {
  echo "Error al ejecutar la consulta: " . mysqli_error($conexion);
}

mysqli_close($conexion);

?>
