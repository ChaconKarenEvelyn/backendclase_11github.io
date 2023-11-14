<?php
 $conexion = mysqli_connect("localhost:3306", "root", "", "proyecto_integrador");

$id = $_GET ['id'];

 $query = "DELETE FROM productos WHERE id_producto = '$id'";

 $resultado = mysqli_query($conexion, $query);

 header("location:proyecto.php");

 mysqli_close($conexion);
?>