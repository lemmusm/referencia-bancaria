<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->

<!--[if gt IE 8]><!--><html lang="es" class="no-js"> <!--<![endif]-->

<!--
		 __  __  __    ____  __  __  __  __  ___    ___  _____  __  __ 
		(  \/  )(  )  ( ___)(  \/  )(  )(  )/ __)  / __)(  _  )(  \/  )
		 )    (  )(__  )__)  )    (  )(__)( \__ \ ( (__  )(_)(  )    ( 
		(_/\/\_)(____)(____)(_/\/\_)(______)(___/()\___)(_____)(_/\/\_)


	Theme Name: banco.uppenjamo
	Theme URI: http://uppenjamo.edu.mx/banco
	Version: 1.0
-->

<head>
<!-- METAS-->
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=Latin1" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1 user-scalable=no">

	<title>Referencia de Pago | UPPE</title>
	<meta name="description" content="">
	<meta name="author" content="Manuel Hernandez Lemus">

<!-- stylesheet-->
		<link rel="stylesheet" href="style.css">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<!-- NORMMALIZE CSS COMPABILITY-->
		<link rel="stylesheet" href="normalize.css">

<!-- jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>
<!-- Validación -->
	<script type="text/javascript" src="js/libs/Jqueryvalidation.js"></script>
	<script type="text/javascript" src="js/libs/validar.js"></script>
<!-- Ajax Process -->
	<!--<script type="text/javascript" src="js/libs/algoritmo.js"></script>-->


	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>

<body>

<!-- Home-->
<div id="container">
			<section id="content">
				<div id="innerProcess">
					<article class="logo"><img src="img/logo_verde.png"></article>
					
					<article class="boxContenidoProcess">
						
						<h3 class="title">Bienvenido</h3>
						<span>
							La Universidad Politécnica de Pénjamo cuenta con un sistema que ayudará a generar la referencia bancaria. <br><br>
							Para ello selecciona el concepto a pagar e inserta tu número de ficha para generar los datos. 
						</span>

					</article>

					<article class="boxContenidoProcess">
						
						<form method="post" id="formAspirantes" action="procesoAspirante.php"><br>
							<div class="fieldForm">
							<h5>Genera referencia bancaria para Aspirantes</h5>
		      					<select id="concepto" class="required" name="conceptoTxtAspirante">
			      					<option value="">Selecciona concepto...</option>
			      					<option value="00">Ficha</option>   
			         				<option value="01">Inscripción</option>
			         				<option value="03"></option>
		      					</select> 
		      				<!---->
		      				<div class="fieldForm">
         						<input type="text" pattern="[0-9]*" id="matricula" class="required" name="fichaTxt" value="" placeholder="Inserta tu número de ficha"/>
         					</div>
						</form>
							<div class="btnSendBox">       
      					<input id="btnSubmit" type="submit" value="Generar"/>
    				</div> 
					</article>
					<article>
						
					</article>
				</div>
			</section>
		</div>	
<!-- Fin Home-->
</body>
</html>
