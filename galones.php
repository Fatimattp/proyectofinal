<!DOCTYPE html>
<html lang="es-ES">
 
<head>
	<meta charset="utf-8">
	<title>Conversor</title>
	<meta name="description" content="Conversor de distancias">
</head>
 
<body background="imagenes/d.jpg">
	<section align="center">
 
		
		
		<form class="form" method="POST" action="#">
			<h2 class="titulo" style="text-align:center;">Conversor de Litros - Galones</h2>
			<p align="center">
			1 Litro= 0.264172 Galon<br>
			
			1 Galon = 3.78541 Litros <br>
			
		</p>
			<div align="center">
				<input type="text" name="valor" value="<?php if(!empty($_POST['valor'])){ echo $_POST['valor'];} ?>" />
				<select name="tipo">
					<option value="<?php if(!empty($_POST['tipo'])){ echo $_POST['tipo'];} ?>">
						<?php if(!empty($_POST['tipo'])){ echo $_POST['tipo'];} else { echo 'Seleccione';} ?>
					</option>
					
					<option value="Litros">Litros</option>
					
					<option value="Galones">Galones</option>
					
				</select>
				<input type="submit" name="calculo" value="Convertir">
				<a class="" href="http://localhost/proyectofinal/menufinal.html"> <input class="btn" type="button" value="Inicio"></a>
			</div>
			<div align="center">
			<img src="imagenes/2.jpg">
			</div>
			
		</form>
 
 
		<h2 align="center"></h2>
		<p align="center">
 
			<?php
 
if (isset($_POST['calculo'])) {
	$valor = $_POST['valor'];
	$tipo = $_POST['tipo'];
 
	switch ($tipo) {
 
		case 'Litros':
 
			echo '
			Litros: '.$valor.'<br>
			Galones '.$valor * 0.264172 .'<br>
			';
			break;
 		
 
		case 'Galones':
 
			echo '
			Galones: '.$valor.'<br>
			Litros: '.$valor *3.78541 .'<br>
			
			
			';
			break;
 
 
	default:
 
		echo 'No hay unidades a convertir';
 
		break;
	}
 
} else {
	echo 'No hay valores a convertir';
}
?>
		</p>
	</section>
</body>
 
</html>

<style type="text/css">
	form {
	width:95%;
	max-width:500px;
	margin:auto;
	background:#EDEFF8;
	border-radius:7px;
}
.contenedor{
		padding:15px 30px;
		display:flex;
		flex-wrap:wrap;
		justify-content:space-between;
}
.titulo{
	background-color: hsla(   0turn , 100% ,50% , 0.5 );
	color:#fff;
	padding:10px;
	text-align:center;
	font-weight:20px;
	font-size:30px;
	border-top-left-radius:7px;
	border-top-right-radius:7px;
	border-bottom:5px solid crimson;
}
.parrafo{
	background-color: hsla(   0turn , 100% ,50% , 0.5 );
	color:#fff;
	padding:4px;
	text-align:center;
	font-weight:10px;
	font-size:10px;
	border-top-left-radius:5px;
	border-top-right-radius:5px;
	
}
</style>