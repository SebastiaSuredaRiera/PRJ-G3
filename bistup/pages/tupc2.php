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
<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){
  //As the plate is the primary key, it cannot be null o empty
  if ($_GET["procesador"]!=null && $_GET["procesador"]!=""){
    //create vars with values
    $procesador = $_GET["procesador"];
    $placa = $_GET["placa"];
    $ram = $_GET["ram"];
    $grafica = $_GET["grafica"];
    $fuente = $_GET["fuente"];
    $caja = $_GET["caja"];
    $Invitado = $_GET["Invitado"];
  }
}

$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "pcuniverse";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$AMD = 'R3600';
$INTEL = 'i7-10700K';
$X470 = 'X470';
$B450 = 'B450';


  $sql1 = "SELECT * FROM Productos WHERE Nombre='$procesador'";
  $sql2 = "SELECT * FROM Productos WHERE Nombre='$placa'";
  $sql3 = "SELECT * FROM Productos WHERE Nombre='$ram'";
  $sql4 = "SELECT * FROM Productos WHERE Nombre='$grafica'";
  $sql5 = "SELECT * FROM Productos WHERE Nombre='$fuente'";
  $sql6 = "SELECT * FROM Productos WHERE Nombre='$caja'";

  $precioprocesador = $conn->query($sql1);
  $precioplaca = $conn->query($sql2);
  $precioram = $conn->query($sql3);
  $preciografica = $conn->query($sql4);
  $preciofuente = $conn->query($sql5);
  $preciocaja = $conn->query($sql6);


  echo "Componentes y precios";
  echo "<br>";

while($row = $precioprocesador->fetch_assoc()) {
    echo $row["Marca"]. " " .$procesador. ": " .$row["Precio"]. "€ <br>";
    $precio1 = $row["Precio"];
    $id1 = $row["Id"];
}
while($row = $precioplaca->fetch_assoc()) {
    echo $row["Marca"]. " " .$placa. ": " .$row["Precio"]. "€ <br>";
    $precio2 = $row["Precio"];
    $id2 = $row["Id"];
}
while($row = $precioram->fetch_assoc()) {
    echo $row["Marca"]. " " .$ram. ": " .$row["Precio"]. "€ <br>";
    $precio3 = $row["Precio"];
    $id3 = $row["Id"];
}
while($row = $preciografica->fetch_assoc()) {
    echo $row["Marca"]. " " .$grafica. ": " .$row["Precio"]. "€ <br>";
    $precio4 = $row["Precio"];
    $id4 = $row["Id"];
}
while($row = $preciofuente->fetch_assoc()) {
    echo $row["Marca"]. " " .$fuente. ": " .$row["Precio"]. "€ <br>";
    $precio5 = $row["Precio"];
    $id5 = $row["Id"];
}
while($row = $preciocaja->fetch_assoc()) {
    echo $row["Marca"]. " " .$caja. ": " .$row["Precio"]. "€ <br>";
    $precio6 = $row["Precio"];
    $id6 = $row["Id"];
}

function validator($procesador, $placa){
      if ((strcmp($procesador, 'i7-10700K')) ==0 && (strcmp($placa, 'X470') ==0)){
        $message = "Disfrute de su procesador Intel";
        return $message;
      }elseif ((strcmp($procesador,'R3600')) ==0 && (strcmp($placa, 'B450') ==0)){
          $message = "Disfrute de su procesador AMD";
          return $message;
        }else{
          $message = "ALERTA! Su configuracion no es compatible";
          return $message;
    }}



function total($precio1, $precio2, $precio3, $precio4, $precio5, $precio6)
{
    return ($precio1 + $precio2 + $precio3 + $precio4 + $precio5 + $precio6);
}

$total = total($precio1, $precio2, $precio3, $precio4, $precio5, $precio6);

echo "El total de la compra es: " .$total. "€";
echo "<br>";
echo validator($procesador, $placa);
echo "<br>";


$precios = array($precio1, $precio2, $precio3, $precio4, $precio5, $precio6);
$ids = array($id1, $id2, $id3, $id4, $id5, $id6);
$Dni = '12345678E';


echo '<br>';
if (strcmp($Invitado, 'Invitado') == 0){
	echo 'No esta registrado y la compra no se ha realizado';
}
else
{
	foreach(array_combine($ids, $precios) as $id => $precio){
        	$query_insert="INSERT INTO Compras VALUES ('$id', '$Dni', '$precio')";
	        $result_insert = $conn->query($query_insert);


}
}



?>


      </div>

</body>
</html>


