<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>MENSAJE ENVIADO</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="icon" href="img/iconoDePagina.png" type="iconoDePagina/png" />

	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>
<body>

	<div class="contenido">
		<div class="menuPag">
			<nav>
				<ul>
					<a href=""><li>QUI&Eacute;NES SOMOS</li></a>
					<a href=""><li>UB&Iacute;CANOS</li></a>
				</ul>

				<a href="index.html">
					<img class="animated zoomIn" src="img/logoDEG.png">
				</a>

				<ul>
					<a href=""><li>CONT&Aacute;CTANOS</li></a>
					<a href=""><li>LOS HUITZACHES</li></a>
				</ul>

			</nav>
		</div>
		
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="contenido">

		<div class="contactoGrid">

			<div class="contactoGridCard">

				<br>
				<br>

				<img src="img/logo.png" width="65%">
				<br>
				<br>
				<br>

				<h3>DIRECCI&Oacute;N</h3>
				<br>
				<p><img src="img/icon_house-contacto.png" width="15"> &nbsp;Calle Morelos # 168, col centro en Los Reyes de Salgado, Michoacán.
				<p><img src="img/icon_phone-contacto.png" width="15"> &nbsp;(044) 354 109 7045</p>
				<p><img src="img/icon_mail-contacto.png" width="15"> &nbsp;los_huitzaches@gmail.com</p>
				
			</div>

			<div class="contactoGridCard">
				<img src="img/contactoFoto.jpg" width="100%" height="300px" style="object-fit: cover; margin: 20px;">
			</div>
			
		</div>

		<center>
			<hr style="background-color: green; border: none; width: 20%; height: 2px; margin: 50px;">
		</center>
		
	</div>

	<div class="contenido">

		<div class="contactoGrid">

			<div class="contactoGridCard">

				<h3>CONT&Aacute;CTANOS</h3>

				<?php 
$myemail = 'gorupos_lolo@hotmail.com';
$name = $_POST['nombre'];
$email = $_POST['email'];
$message = $_POST['mensaje'];

$to = $myemail;
$email_subject = "Nuevo mensaje: $subject";
$email_body = "Haz recibido un nuevo mensaje. \n Nombre: $name \n Correo: $email \n Mensaje: \n $message";
$headers = "From: $email";

mail($to, $email_subject, $email_body, $headers);
echo "El mensaje se ha enviado correctamente";
?>

				<form method="post" action="php/enviar.php">
					<br><br>
					<input type="text" name="nombre" placeholder="NOMBRE">
					<br><br>
					<input type="email" name="email" placeholder="CORREO">
					<br><br>
					<textarea type="text" name="mensaje" placeholder="MENSAJE"></textarea>
					<br><br>
					<input type="submit" name="ENVIAR">
				</form>

				
				
			</div>

			<div class="contactoGridCard">
				<br>
				<br>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3758.9725424422377!2d-102.4742506850909!3d19.58567698679753!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842e4197fa1bb547%3A0xbf67c00ff04c2490!2sMorelos%20168%2C%20Centro%2C%2060374%20Centro%2C%20Mich.!5e0!3m2!1ses-419!2smx!4v1589577674306!5m2!1ses-419!2smx"  frameborder="0" style="border:0; width: 100%; height:400px; margin: 20px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			
		</div>
		
	</div>

	<br>
	<br>
	<br>
	<br>
	<br>
	<br>


	<div class="contenido">
		<div class="finalPag">

			<div class="finalPag_content">
				<br>
				<ul>
					<li>Quienes somos</li>
					<li>Ubicanos</li>
					<li>Contactanos</li>
					<li>Productos</li>
				</ul>
			</div>

			<div class="finalPag_content">
				<br>
				<h3>Cont&aacute;ctanos</h3>
				<br>
				<p><img src="img/icon_house.png" width="15"> &nbsp;Calle Morelos # 168, col centro en Los Reyes de Salgado, Michoacán.
				<p><img src="img/icon_phone.png" width="15"> &nbsp;(044) 354 109 7045</p>
				<p><img src="img/icon_mail.png" width="15"> &nbsp;los_huitzaches@gmail.com</p>
				<br>
				<br>
			</div>

		</div>
		<div class="contenido">
			<div class="endPag">
				<div class="endPag_content">
					<p>DERECHOS RESERVADOS &copy; 2020. COMERCIALIZADORA DE FRUTAS LOS HUITZACHES SPR DE RL DE CV.</p>
					
				</div>

				<div class="endPag_content">
					<div class="endPag_img">
						<img src="img/icon_house.png" width="15">
						<img src="img/icon_house.png" width="15">
						<img src="img/icon_house.png" width="15">
						<img src="img/icon_house.png" width="15">
					</div>
				</div>
			</div>
		</div>
		
	</div>

</body>
</html>