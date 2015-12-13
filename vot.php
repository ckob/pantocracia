<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Pantocracia</title>
		<style>
			#cuerpo ul {
				padding-top: 50px;
				padding-bottom: 100px;
				width: 300px;
				height: 60px;
				margin: 0 auto;
			}
			#cuerpo ul li {
				list-style-type: none; 
				text-align: center;
				display: inline;
			}
			#cuerpo ul li a{
				width: 80px;
				color: #FFF;
				display: inline-block;
				font-family: Helvetica,Arial,sans-serif;
				padding: 15.5px 30px;
				text-decoration: none;
				background-color: #004B98;
			}
			#cuerpo ul li a:hover {
				background-color: #0069D4;

			}
			#cuerpo h1 {
				padding-top: 60px;
				padding-bottom: 0;
				color: #333333;
				font-family: Helvetica, Arial,  sans-serif;
				font-size: 160%;
				text-align: center;
			}
			
		</style>
	</head>
	<body>
		 <?php require("header.html"); ?>

 		<div id="cuerpo">
 			<h1>¿Quieres votar o mirar los resultados de votaciones ya resueltas?</h1>
			<ul>
				<li><a id="votar" href="votar.php">Votar</a></li>
				<li><a id="resultados" href="votresult.php">Resultados</a></li>
			</ul>
		</div>
		<?php require 'footer.html'; ?>
	</body>
</html>