<?php
include ("database.php");

$nombre = $_POST["nomprod"];
$codigo = $_POST["codprod"];
$cantidad = $_POST["cantpro"];
$estado = $_POST["estprod"];

$sql = "INSERT INTO productos
(nombre_producto,codigo_prod,cantidas,estado) VALUES ('$nombre','$codigo','$cantidad','$estado')";

if($conn->query($sql) == TRUE){
	echo "Producto Registrado Con Exito<br>";
	echo "<a href='index.php'>Regresar</a>";
}else{
	die("Error; ".$conn->error);
}
?>