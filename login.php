<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Pantocracia</title>
		<style>
			#divlog {
				padding-top: 100px;
				padding-bottom: 100px;
				width: 300px;
				height: 150px;
				margin: 0 auto;
			}
			#divlog input[type="text"], #divlog input[type="password"] {
				display: block;
				margin: 0;
				width: 278px;
				font-family: sans-serif;
				font-size: 18px;
				appearance: none;
				box-shadow: none;
				border-radius: none;

				padding: 10px;
			  	border: solid 1px #dcdcdc;
			  	transition: box-shadow 0.3s, border 0.3s;
			}
			#divlog input[type="text"]:focus,
			#divlog input[type="text"].focus,
			#divlog input[type="password"]:focus,
			#divlog input[type="password"].focus {
				outline: none;
				border: solid 1px #707070;
				box-shadow: 0 0 5px 1px #969696;
			}
			#divlog input[type="submit"] {
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
			#divlog input[type="submit"]:hover {
				background-color: #0069D4;
			}
		</style>
	</head>
	<body>
		 <?php include("header.html"); ?>

 		<div id="cuerpo">
			<div id="divlog">
				<form action="." method="post">
					<input type="text" name="dni" placeholder="DNI 00000000-A" pattern="^[0-5][0-9]{7}(-)?[a-Z]$" autofocus required>
					<input type="password" name="pass" placeholder="Contraseña" required>
					<br><input type="submit" value="Iniciar sesión">
				</form>
			</div>
		</div>
		<?php include("footer.html"); ?>		
	</body>
</html>