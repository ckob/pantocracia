<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Pantocracia</title>
		<style>
			#divform {
				padding-top: 100px;
				padding-bottom: 100px;
				width: 70%;
				height: 400%;
				margin: 0 auto;
			}
			#divform input[type="text"], #divform textarea {
				display: block;
				margin: 0;
				width: calc(100% - 20px);
				font-family: sans-serif;
				font-size: 18px;
				appearance: none;
				box-shadow: none;
				border-radius: none;

				padding: 10px;
			  	border: solid 1px #dcdcdc;
			  	transition: box-shadow 0.3s, border 0.3s;
			}
			#divform input[type="text"]:focus,
			#divform input[type="text"].focus,
			#divform textarea:focus,
			#divform textarea.focus {
				outline: none;
				border: solid 1px #707070;
				box-shadow: 0 0 5px 1px #969696;
			}
			#divform input[type="submit"] {
				color: white;
				background-color: #004B98;
				border-color: #004B98;
				display: block;
				margin: 0;
				width: 100%;
				height: 50px;
				font-family: sans-serif;
				font-size: 18px;
				appearance: none;
				box-shadow: none;
				border-radius: none;
			}
			#divform input[type="submit"]:hover {
				background-color: #0069D4;
			}
			#divform  {
				font-family: Helvetica;
				font-size: 18px;
			}
		</style>
	</head>
	<body>
		 <?php require("header.html"); ?>

 		<div id="cuerpo">
 			<div id="divform">
 				<form action="." method="post">
 					<input type="text" name="titulo" placeholder="Título de la propuesta" autofocus required>
 					<br><textarea name="descip" placeholder="Descripción de la propuesta" rows="5" ></textarea>
 					<br><input type="checkbox" name="novedades" value="recibir" checked> Quiero recibir novedades sobre mi propuesta
 					<br><br><input type="submit" value="Enviar propuesta">
				</form> 
 			</div>
		</div>
		<?php require 'footer.html'; ?>
	</body>
</html>