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

$query_insert="INSERT INTO Productos (Tipo, Nombre, Marca, Precio) VALUES ('$tipo', '$nombre', '$marca', '$precio')";

if ($conn->query($query_insert) === TRUE) {
  echo "Se ha añadido el articulo: ".$nombre;
} else {
  echo "Error: " . $conn->error;
}

echo '<p><a href="admin.php">Administración</a></p>';

$conn->close();
?>
