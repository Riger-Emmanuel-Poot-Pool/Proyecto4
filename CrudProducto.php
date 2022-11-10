<?php

include_once '../Usuarios/DB.php';

/* Codigo para Insertar Datos */
if (isset($_POST['guardar'])) {

  echo "Guardandoooooooooooooooooooo";
  $nombre_producto = $MySQLiconn->real_escape_string($_POST['nombre_producto']);
  $especialidad = $MySQLiconn->real_escape_string($_POST['especialidad']);
  $precio = $MySQLiconn->real_escape_string($_POST['precio']);
  
  $SQL = $MySQLiconn->query("INSERT INTO productos(id_producto, nombre_producto, especialidad, precio) VALUES ('0','$nombre_producto','$especialidad', '$precio')");
  

  if (!$SQL) {
    echo $MySQLiconn->error;
  }
}
 ?>