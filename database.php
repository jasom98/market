<?php
//Credenciales de conexion a BD
//localhost/market/database.php
$user_name = "root"; // usuario de mysql
$servername = "localhost"; //127.0.0.1
$password = ""; //contraseña de mysql
$dbname = "market";

$conn = new mysqli($servername,$user_name,$password,$dbname); //conexion de bases de datos

if($conn->connect_error){
	die("Error: ".$conn->connect_error); //muestra el fallo de conexion
	}else{
		//die("Conexion existosa a la base de datos Market");
	}
?>