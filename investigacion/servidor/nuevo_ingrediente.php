<?php
include "dbconnection.php";
mysqli_set_charset($conn,'utf8' );
$nombre = $_POST["nombre"];
$imagen = $_POST["imagen"];
$fecha_cad = $_POST["fecha_cad"];
$fecha_com = $_POST["fecha_com"];
$cantidad = $_POST["cantidad"];
$precio = $_POST["precio"];
$mi_consulta="INSERT INTO ingrediente (nombre, precio, compra, caducidad, cantidad, imagen) VALUES ('$nombre', '$precio','$fecha_com', '$fecha_cad', '$cantidad', '$imagen')";
$result=mysqli_query($conn, $mi_consulta);
	 
?>