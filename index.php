<!DOCTYPE html>
<!--
Template Name: Bistup
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html>
<head>
<title>PC-UNIVERSE</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="Css/index.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->

<div class="wrapper row0">
  <div id="topbar" class="hoc clear">
    <!-- Primer Menu Superior -->
    <div class="fl_left">
      <ul class="nospace">
        <li><a href="index.html"><i class="fas fa-home fa-lg"></i></a></li>
        <li><a href="pages/envios.html" target="nav">Envios</a></li>
        <li><a href="pages/metodos.html" target="nav">Metodos de Pago</a></li>
        <li><a href="pages/condiciones.html" target="nav">Condiciones y Privacidad</a></li>
        <li><a href="pages/garantia.html" target="nav">Garantia</a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace">
        <li><i class="fas fa-phone rgtspace-5"></i> +34 970 456 78</li>
        <li><i class="fas fa-envelope rgtspace-5"></i> pcuniverse@domain.com</li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
  <header id="header" class="hoc clear">
    <!-- ################################################################################################ -->
    <div id="logo" class="one_quarter first">
      <h1><a href="index.html">PC - Universe</a></h1>
      <p>La mejor tienda de informatica</p>
    </div>
    <div class="one_quarter"><strong><i class="fas fa-phone rgtspace-5"></i> Contacta con nosotros:</strong>   +34 970 456 78 </div>
    <div class="one_quarter"><strong><i class="far fa-clock rgtspace-5"></i> De lunes a sabado:</strong>   08.00am - 19.00pm</div>

    <?php
	if ($_POST["Usuario"]!=null && $_POST["Usuario"]!=""){
	  //create vars with values
	  $Usuario = $_POST["Usuario"];
	  echo $Usuario;
	} else {
	  echo "Invitado";
	}
    ?>

  </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear">
    <!-- ################################################################################################ -->
    <ul class="clear">
      <li class="active"><a href="pages/ofertas.html" target="nav">Ofertas</a></li>
      <li><a href="pages/tupc.html" target="nav">Tu PC</a></li>
      <li><a href="pages/ordenadores.html" target="nav">Ordenadores</a></li>
      <li><a href="pages/perifericos.html" target="nav">Perifericos</a></li>
      <li><a href="pages/suscribete.html" target="nav">Suscribete</a></li>
    </ul>
    <!-- ################################################################################################ -->
  </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper bgded overlay";>


    <section class="Iframe">

    	<iframe src="pages/ofertas.html" name="nav" width="100%" height="100%"> </iframe>

    </section>
    <div class="wrapper row4">
      <footer id="footer" class="hoc clear">
         <div class="one_quarter first">
          <h6 class="heading">Donde encontrarnos</h6>
          <ul class="nospace btmspace-30 linklist contact">
            <li><i class="fas fa-map-marker-alt"></i>
              <address>
              Carrer santa Barbara nº 30
              </address>
            </li>
          </ul>
        </div>
        <div class="one_quarter">
          <h6 class="heading">Redes sociales</h6>
          <ul class="nospace linklist">
            <li><a class="faicon-facebook" href="https://es-es.facebook.com" >PCUniverse <i class="fab fa-facebook"></i></a></li>
          </ul>
        </div>
        <div class="one_quarter">
          <h6 class="heading">Contacto</h6>
          <ul class="nospace linklist">
          <li><i class="fas fa-phone"></i> +34 601124158</li>
          </ul>
        </div>
        <div class="one_quarter">
          <h6 class="heading">Peticiones o Propuestas</h6>
          <ul class="nospace linklist">
            <li><i class="far fa-envelope"></i> PCUniverse@BaGui.com</li>
          </ul>
        </div>

</body>
</html>
