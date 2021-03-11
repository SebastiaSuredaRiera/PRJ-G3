<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <title>PC-UNIVERSE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../Css/paginas.css" rel="stylesheet" type="text/css" media="all">
  <link rel="shortcut icon" href="Imatges/logo.ico">


</head>

<body>
    <div class="center">
      <!-- ################################################################################################ -->
      <h1>Configurador de PCs</h1>
      <!-- ################################################################################################ -->
    </div>


        <div class="center">
        <table border="1px">

	<form action="tupc2.php">
					<tr>
          <td><label for="procesador">Procesador:</label></td>
            <td><select name="procesador" id="procesador">
              <option value="R3600">R3600</option>
              <option value="i7-10700K">i7-10700K</option>
            </select>
					</tr>
					<tr>
          <td><label for="placa">Placa base:</label></td>
            <td><select name="placa" id="placa">
              <option value="X470">X470</option>
              <option value="B450">B450</option>
            </select></td>
					</tr>
					<tr>
          <td><label for="ram">Memoria RAM:</label></td>
            <td><select name="ram" id="ram">
              <option value="2x8GB">2x8GB 3200Mhz</option>
              <option value="2x4GB">2x4GB 3000Mhz</option>
            </select></td>
					</tr>
					<tr>
          <td><label for="grafica">Tarjeta Grafica:</label></td>
            <td><select name="grafica" id="grafica">
              <option value="3080">3080</option>
              <option value="2060">2060</option>
            </select></td>
					</tr>
					<tr>
          <td><label for="fuente">Fuente Alimentacion:</label></td>
            <td><select name="fuente" id="fuente">
              <option value="650W">650W</option>
              <option value="500W">500W</option>
            </select></td>
					</tr>
					<tr>
          <td><label for="caja">Caja/Torre</label></td>
            <td><select name="caja" id="caja">
              <option value="LITE010">LITE010</option>
              <option value="5000X">5000X</option>
            </select></td>
					</tr>
					<tr>
<?php
$Invitado = $_GET["Invitado"];
echo "<input type='hidden' name='".$Invitado."' value='".$Invitado."' />";
?>
<td colspan="2"><input type="submit"></td>
					</tr>

	</form>
        </table>

      </div>

</body>
</html>
