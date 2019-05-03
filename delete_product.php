<?php
$codigo= $_GET['cod'];
//1. Database Connection
include("database.php");
//2. Create SQL to delete
$sql="DELETE FROM productos WHERE codigo_prod=$codigo";
//3. Execute SQL
$conn->query($sql);
//4. Confirm transaction
echo "<script languaje = 'javascript'>alert(':::Producto Eliminado con Exito :::')</script>";
header("Refresh:0;url=index.php");
?>