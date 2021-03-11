<?php
$tipo = $_GET["tipo"];
$nombre = $_GET["nombre"];
$marca = $_GET["marca"];
$precio = $_GET["precio"];

$servername = "localhost";
$username = "admin";
$password = "1234";
$dbname = "pcuniverse";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



$sql = "UPDATE Productos SET tipo = '$tipo', marca = '$marca', precio = '$precio' WHERE Productos.nombre = '$nombre'";

if ($conn->query($sql) === TRUE) {
  echo "Se ha modificado el articulo".$nombre;
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
echo '<p><a href="admin.php">Administración</a></p>';

?>

