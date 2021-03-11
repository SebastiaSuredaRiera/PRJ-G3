<?php
$Nombre = $_GET["nombre"];

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

// sql to delete a record
$sql = "DELETE FROM Productos WHERE Nombre = '$Nombre'";
if ($conn->query($sql) === TRUE) {
  echo "Se ha eliminado el producto: ".$Nombre;
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
echo '<p><a href="admin.php">Administración</a></p>';

?>

