<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
  <title>PC-UNIVERSE</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="../Css/index.css" rel="stylesheet" type="text/css" media="all">
  <link rel="shortcut icon" href="Imatges/logo.ico">

</head>
<body>
<div style="width: 25%;height: 500px;margin: auto;">
<?php
require "Clientes.php";
if ($_GET["Dni"]!=null && $_GET["Dni"]!=" "){
  //create vars with values
  $Dni = $_GET["Dni"];
  $Usuario = $_GET["Usuario"];
  $Contra = $_GET["Contra"];
  $Contra2 = $_GET["Contra2"];
  $Correo = $_GET["Correo"];
  $Sexo = $_GET["Sexo"];

  $db = new mysqli('localhost','admin','1234','pcuniverse');

  $Hash = password_hash($Contra,PASSWORD_DEFAULT);

  $Hash_Compare = 'select Contrasenya from Clientes where Contrasenya = $Hash';

  $result_select = $db->query($Hash_Compare);

Cliente1 = new  Cliente ($Dni,$Usuario,$Hash,$Correo,$Sexo);

  if ((strcmp($Contra, $Contra2) != 0)||(filter_var($Correo, FILTER_VALIDATE_EMAIL) != 0)){
    echo 'Las Contraseñas no son iguales o el email son invalidos';
	}

elseif ($db->connect_errno != null) {
    echo "An unexpected error happened.</br> Error number $db->connect_errno when conneting to the database.</br> Error message: $db->connect_error ";
    exit();
	}
    else{
      //check if the plate already exist in the table cars as is a primary key
      $query_insert="INSERT INTO Clientes VALUES ('".Cliente1->get_Dni."','".Cliente1->get_Usuario."','".Cliente1->get_Hash."','".Cliente1->get_Correo."','".Cliente1->get_Sexo."')";
//echo "query_select $query_select</br>";
      $result_insert = $db->query($query_insert);
	echo 'Gracias por Suscribirte ha PCUniverse!';
}
}
 ?>
 <a href="suscribete.html">Anterior</a>
    </div>
</body>
</html>
