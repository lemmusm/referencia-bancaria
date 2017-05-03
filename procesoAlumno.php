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
<html>
<head>
	<title>Imprimir</title>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=Latin1" />
		<meta name="viewport" content="width=device-width , initial-scale=1 ,maximum-scale=1">

		<meta name="author" content="Manuel Hernandez Lemus">
		<meta name="robots" content="INDEX, FOLLOW, ARCHIVE" >
		
		<meta name="description" content="">
		<meta name="keywords" content="">

<!-- stylesheet-->
		<link rel="stylesheet" href="style.css" media="all">
		<link rel="stylesheet" href="print.css" media="print">
		<link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
<!-- NORMMALIZE CSS COMPABILITY-->
		<link rel="stylesheet" href="normalize.css">
<!-- jQuery -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.min.js"></script>

</head>
<body>
	<?php
 
//OPERACIONES
		$varSucursalFinal = 383; //Suma de valores de acuerdo al algorimo
		$varNumeroCuentaFinal = 733; //Suma de valores de acuerdo al algorimo

	//Valor en campo matriculaTxt y conceptoTxt
		$varMatricula = $_POST['matriculaTxt'];
		$varConcepto = $_POST['conceptoTxt'];

	//Almacenar posiciones en variables separadas de la varible varMatricula y varConcepto

		$varValM0 = $varMatricula[0];
		$varValM1 = $varMatricula[1];
		$varValM2 = $varMatricula[2];
		$varValM3 = $varMatricula[3];
		$varValM4 = $varMatricula[4];
		$varValM5 = $varMatricula[5];
		$varValM6 = $varMatricula[6];
		$varValM7 = $varMatricula[7];
		$varValM8 = $varMatricula[8];

		$varValC0 = $varConcepto[0];
		$varValC1 = $varConcepto[1];

	//Obtener valores de multiplicaciones
		$varResM0 = $varValM0 * 3;
		$varResM1 = $varValM1 * 5;
		$varResM2 = $varValM2 * 7;
		$varResM3 = $varValM3 * 11;
		$varResM4 = $varValM4 * 13;
		$varResM5 = $varValM5 * 17;
		$varResM6 = $varValM6 * 19;
		$varResM7 = $varValM7 * 23;
		$varResM8 = $varValM8 * 29;

		$varResC0 = $varValC0 * 31;
		$varResC1 = $varValC1 * 37;

	//Obtener valores de sumatoria
		$sumatoriaMatriculaDV = $varResM0 + $varResM1 + $varResM2 + $varResM3 + $varResM4 + $varResM5 + $varResM6 + $varResM7 + $varResM8;
		$sumatoriaConceptoDV = $varResC0 + $varResC1;

		$sumaTotal = $sumatoriaMatriculaDV + $sumatoriaConceptoDV + $varSucursalFinal + $varNumeroCuentaFinal;		

		$varResiduo = $sumaTotal % 97; // Obtener Residuo

		$varDigitoVerificador = 99 - $varResiduo; // Obtener numero verificador

			if ($varDigitoVerificador <= 9) {
				$varResultadoFinal = $varMatricula = $_POST['matriculaTxt'] . $varConcepto = $_POST['conceptoTxt'] . "0" . $varDigitoVerificador; 
			}else{
				$varResultadoFinal = $varMatricula = $_POST['matriculaTxt'] . $varConcepto = $_POST['conceptoTxt'] . $varDigitoVerificador; 
			}

		//$varResultadoFinal = $varMatricula = $_POST['matriculaTxt'] . $varConcepto = $_POST['conceptoTxt'] . $varDigitoVerificador; 

		//$resultado = $varResultadoFinal;


	//Switch Case para los costos
		switch ($_POST['conceptoTxt'])
	      {
	       	case "00": 
	              	$varMonto = "$ 700.00";
	              	$varConceptoTxt = "Inscripción";
	              	break;

	       	case "01":
	              	$varMonto = "$ 700.00";
	              	$varConceptoTxt = "Reinscripción";
	              	break;

	        case "02":
	              	$varMonto = "$ 80.00";
	              	$varConceptoTxt = "Exámenes Regular";
	              	break;

			case "03":
	              	$varMonto = "$ 80.00";
	              	$varConceptoTxt = "Exámenes Especial";
	              	break;
	        
	        case "04":
	              	$varMonto = "$ 90.00";
	              	$varConceptoTxt = "Reposición de credencial";
	               	break;

	        case "05":
	              	$varMonto = "$ 80.00";
	              	$varConceptoTxt = "Constancia de Estudios";
	              	break;

	        case "06":
	              	$varMonto = "$ 800.00";
	              	$varConceptoTxt = "Propedéutico";
	              	break;

 			case "07":
	              	$varMonto = "$ 80.00";
	              	$varConceptoTxt = "Certificado Parcial";
	              	break;

	        case "08":
	              	$varMonto = "$ 80.00";
	              	$varConceptoTxt = "Certificado Total";
	              	break;

			case "09":
	              	$varMonto = "$ 80.00";
	              	$varConceptoTxt = "Reposición de Certificado";
	              	break;

	        case "10":
	              	$varMonto = "$ 80.00";
	              	$varConceptoTxt = "Acreditación de Competencia";
	              	break;    

	       	case "11":
	              	$varMonto = "$ 350.00";
	              	$varConceptoTxt = "Trámite de equivalencia";
	              	break;

	       	case "12":
	              	$varMonto = "$ 650.00";
	              	$varConceptoTxt = "Curso de Actualización";
	              	break;

	        case "13":
	              	$varMonto = "$ 3,500.00";
	              	$varConceptoTxt = "Trámite de Título";
	              	break;

	        case "14":
	              	$varMonto = "$ 3,500.00";
	              	$varConceptoTxt = "Trámite de Profesional Asociado";
	              	break;
		       }
	?>

	<section class="wrap">
	<!-- -->
		<article class="sections cabecera">
			<div class="left">
				<img src="img/logo_verde.png">
			</div>
			<div class="right">
				<?php
					echo "<strong>Fecha: </strong>" . $sdate=date("d")."/".date("m")."/".date("Y");
				?>
			</div>
		</article>
	<!-- -->
		<article class="sections">
			<div class="left">
				<strong>Banco: </strong>
			</div>
			<div class="right fixR">
				Banamex
			</div>
		</article>
	<!-- -->
		<article class="sections colorGray">
			<div class="left">
				<strong>Sucursal: </strong>
			</div>
			<div class="right fixR">
				7006
			</div>
		</article>
	<!-- -->
		<article class="sections">
			<div class="left">
				<strong>Cuenta: </strong>
			</div>
			<div class="right fixR">
				3066824
			</div>
		</article>
	<!-- -->
		<article class="sections colorGray">
			<div class="left">
				<strong>Referencia: </strong>
			</div>
			<div class="right fixR">
				<?php
					echo "00000" . $varResultadoFinal;
				?>
			</div>
		</article>
	<!-- -->
		<article class="sections">
			<div class="left">
				<strong>Concepto: </strong>
			</div>
			<div class="right fixR">
				<?php
					echo $varConceptoTxt;
				?>
			</div>
		</article>
	<!-- -->
		<article class="sections colorGray monto">
			<div class="left">
				<strong>Monto: </strong>
			</div>
			<div class="right fixR">
				<?php
					echo $varMonto;
				?>
			</div>
		</article>
	</section>
	<!-- -->
	<article id="info">
		<p>
			Montos según ejercicio fiscal 2014
		</p>
	</article>
	<!-- -->
	<article class="print">
		<strong><a href="javascript:window.print()">Imprimir</a></strong>
	</article>

</body>
</html>
