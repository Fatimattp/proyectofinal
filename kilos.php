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
			<h2 class="titulo" style="text-align:center;">Conversor KG - Libras</h2>
			<p align="center">
			1 Kg= 2.20462 Libras<br>
			
			1 Libra =0.453592 kg <br>
			
		</p>
				<input class="btn" type="text" name="valor" value="<?php if(!empty($_POST['valor'])){ echo $_POST['valor'];} ?>" />
				<select class="btn1" name="tipo">
					<option value="<?php if(!empty($_POST['tipo'])){ echo $_POST['tipo'];} ?>">
						<?php if(!empty($_POST['tipo'])){ echo $_POST['tipo'];} else { echo 'Seleccione';} ?>
					</option>
					
					<option value="Kilogramos">Kg</option>
					
					<option value="Libras">Libras</option>
					
				</select>
				<input class="btn2" type="submit" name="calculo" value="Convertir">

				<a class="" href="http://localhost/proyectofinal/menufinal.html"> <input class="btn4" type="button" value="Inicio"></a>
			</div>

			<div align="center">
				<img src="imagenes/3.png">
			</div>


			
		</form>
 
 
		<h2 align="center"></h2>
		<p align="center">
 
			<?php
 
if (isset($_POST['calculo'])) {
	$valor = $_POST['valor'];
	$tipo = $_POST['tipo'];
 
	switch ($tipo) {
 
		case 'Kilogramos':
 
			echo '
			Kilogramos: '.$valor.'<br>
			Libras '.$valor * 2.20462 .'<br>
			';
			break;
 		
 
		case 'Libras':
 
			echo '
			Libras: '.$valor.'<br>
			Kilogramos: '.$valor *0.453592 .'<br>
			
			
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
	
.form {
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
.btn{
width: 100px;
height: 19px;

}
.btn1{
width: 100px;
height: 24px;

}
.btn2{
width: 100px;
height: 26px;

}
.btn4{
width: 100px;
height: 26px;

}
</style>