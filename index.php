<html>
    <head>
        <title>Market</title>
        <link rel="icon" type="image/ico" href="images/f.jpg" />
<meta charset="UTF-8">
        <form  name="formulario" method="post" action="insert_prod.php">
		<center>
                <table border="1">
                    <h3>Market</h3>
                    <tr>
                        <td>
                        <label>Codigo Producto<font color="red">*</label>
                        <input type="text" name="codprod" style="margin-left: 170px; width: 180px" placeholder="Codigo" required >
                        </td>
                    </tr>

                    <tr>
                        <td>
                        <div>
                        <label>Nombre Producto<font color="red">*</label>
                        <input type="text" name="nomprod" style="margin-left:  165px; width: 180px" placeholder="Nombre" required>
                        </div>
                        </td>
                    </tr>
					<tr>
                        <td>
                        <div>
                        <label>Cantidad<font color="red">*</label>
                        <input type="number" name="cantprod"  style="margin-left: 103px; width: 180px" placeholder="Cant" required>
                        </div>
                        </td>
                    </tr>
					<tr>
                        <td>
                        <div>
                        <label>Estado<font color="red">*</label>
                        <select name="estprod" style="margin-left: 174px; width: 184px" placeholder="Ingrese Genero"required>
                            <option value=1>Habilitado</option>
                            <option value=0>Desabilitado</option>
                            </select>
                        </div>
                        </td>
                    </tr>
					<td>
                        <center>
                        <div>
                        <button>Registrarse</button>
                    </div>
                            </center>
                    </td>
                    </table>
					<hr>
					
        </center>
        </form>
    </head>
	
</html>
<table border='1' align="center">
<tr><th>Codigo</th><th>Nombre</th><th>Cantidad</th><th>Ed</th><th>Eli</tr>
<?php
// 1. Database Conection
	include("database.php");
	// 2. Create SQL
	$sql = "SELECT * FROM productos";
	$result = $conn->query($sql);
	//3.Show Data
	if($result->num_rows>0){
		while($row=$result->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$row["codigo_prod"]."</td>";
		echo "<td>".$row["nombre_prod"]."</td>";
		echo "<td>".$row["cantidad"]."</td>";
		echo "<td><img src='icons/edit.png' width='20'></td>";
		echo "<td><a href='delete_product.php?cod=".$row["codigo_prod"]."'><img src='icons/delete.png' width='20'></td>";
		echo "</tr>";
		}
	}else{
		echo "::: No hay productos registrados :::";
	}
?>
