<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Pantocracia</title>
		<style>
			#cuerpo {
				width: 100%;
			}
				#cuerpopropuestas {
					padding-top: 60px;
	    			min-width: 1000px;
					width: 70%;
					height: 100%;
				    margin: 0 auto;
				}
				#cuerpopropuestas hr {
					border: 0; 
					height: 1px; 
					background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #C5C5C5, rgba(0, 0, 0, 0));
				}

					.propuesta {
						padding-top: 15px;
						height: 200px; 
					}
						.info {
							float: right;
							width: calc(100% - 140px);
							height: 100%;
						}
							.info h1 {
								color: black;
								font-family: Helvetica, Arial,  sans-serif;
								font-size: 200%;
								padding: 10px;
								/* Per si es supera el limit de el div per la dreta, surten 3 punts. */
								text-overflow: ellipsis;
								white-space: nowrap;
								overflow: hidden;
							}
							.info p {
								color: gray;
								padding-left: 50px;
								padding-bottom: 10px;
								
								display: block;
								font-family: Helvetica;
							}
						.votesBox {
							height: 65px;
							width: 130px;
							float:left;
							text-align: right;

						}
							.votes {
							 	display:inline-block;

							}
							.vote {
							 	vertical-align:middle;
							 	display:inline-block;
							}
							.vote a, .votes {
								color: gray;
							}
							.vote a:hover {
								color: black;
							}

					.titulo {
						padding-left: 175px;
						padding-bottom: 50px;
						color: black;
						font-family: Helvetica, Arial,  sans-serif;
						font-size: 1.7em;
						letter-spacing: 2px;
					}
					#cuerpopropuestas #newprop {
						padding-top: 30px;
						margin: 0 auto;
						width: 400px;
						padding-bottom: 30px;
					}
					#cuerpopropuestas #newprop a{
						width: 100%;
						text-align: center;
						color: #FFF;
						display: inline-block;
						font-family: Helvetica,Arial,sans-serif;

						padding: 15.5px 0px;
						text-decoration: none;
						background-color: #004B98;
					}
					#cuerpopropuestas #newprop a:hover {
						background-color: #0069D4;

					}

		</style>
	</head>
	<body>
		 <?php require("header.html"); ?>

 		<div id="cuerpo">
			<div id="cuerpopropuestas">
				<div class="titulo">
					<h1>Propuestas</h1>
				</div>
				<div class="propuesta">
					<div class="info">
						<h1>Penas de carcel para maltratadores de animales</h1>
						<p>Debería revisarse el código penal para imponer penas mas duras a los que maltraten animales</p>
					</div>
					<div class="votesBox">
						<div class="votes"><h3>453156</h3></div>
					    <div class="vote">
					        <div class="voteUp"><a href="#"><i class="fa fa-arrow-up fa-2x"></i></a></div>
					        <div class="voteDown"><a href="#"><i class="fa fa-arrow-down fa-2x"></i></a></div>
					    </div>
					</div>
				</div>
				<hr>
				<div class="propuesta">
					<div class="info">
						<h1>Prohibir subvenciones a las insituciones religiosas</h1>
						<p>Eliminar cualquier tipo de subvencion o ayuda pública a instituciones que se declaren religiosas.</p>
					</div>
					<div class="votesBox">
						<div class="votes"><h3>348615</h3></div>
					    <div class="vote">
					        <div class="voteUp"><a href="#"><i class="fa fa-arrow-up fa-2x"></i></a></div>
					        <div class="voteDown"><a href="#"><i class="fa fa-arrow-down fa-2x"></i></a></div>
					    </div>
					</div>
				</div>
				<hr>
				<div class="propuesta">
					<div class="info">
						<h1>Sanidad pública y gratuita para todos los Españoles</h1>
						<p>Todo aquel que pague impuestos y sea ciudadano Español debería tener derecho a una sanidad pública y gratuita en todos los ámbitos.</p>
					</div>
					<div class="votesBox">
						<div class="votes"><h3>156478</h3></div>
					    <div class="vote">
					        <div class="voteUp"><a href="#"><i class="fa fa-arrow-up fa-2x"></i></a></div>
					        <div class="voteDown"><a href="#"><i class="fa fa-arrow-down fa-2x"></i></a></div>
					    </div>
					</div>
				</div>
				<hr>
				<div class="propuesta">
					<div class="info">
						<h1>Veterinarios públicos en la Seguridad Social</h1>
						<p>Todo aquel que quiera tener una mascota a su cargo, debería pagar un impuesto añadido a cambio de recibir sanidad pública para el animal. Previniendo así que las enfermedades de dichas mascotas pasaran a los humanos por falta de recursos económicos para solventarlo.</p>
					</div>
					<div class="votesBox">
						<div class="votes"><h3>99348</h3></div>
					    <div class="vote">
					        <div class="voteUp"><a href="#"><i class="fa fa-arrow-up fa-2x"></i></a></div>
					        <div class="voteDown"><a href="#"><i class="fa fa-arrow-down fa-2x"></i></a></div>
					    </div>
					</div>
				</div>
				<hr>
				<div id="newprop">
					<a id="propuesta" href="newprop.php">Realizar una nueva propuesta</a>
				</div>
			</div>
		</div>
		<?php require 'footer.html'; ?>
	</body>
</html>