<html>
    <head>
        <title>Market</title>
        <link rel="icon" type="image/ico" href="images/f.jpg" />
<meta charset="UTF-8">
        <form  name="formulario" method="post" action="index2.html">
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
                            <option>Habilitado</option>
                            <option>Desabilitado</option>
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
					<table border="2">
					<td>
					<div>
					<label>Codigo Producto |</label>
					<label>Nombre Producto |</label>
					<label>Cantidad |</label>
					<label>Estado |</label>
					</div>
					</td>
					</table>
        </center>
        </form>
    </head>
</html>