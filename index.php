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
				#cuerponoticias {
					padding-top: 60px;
	    			min-width: 1000px;
					width: 70%;
					height: 100%;
				    margin: 0 auto;
				}
				.unanoticia {
					padding-top: 15px;
					height: 350px; 
					position:relative; /* Per poder ficar el boton abaix a la dreta */
				}
					.noticia {
						height: 100%;
						float:right;
						width: calc(100% - 290px);
					}
						.noticia h1 {
							padding-top: 25px;
							padding-left: 25px;
							padding-right: 25px;
							padding-bottom: 25px;
							color: #181818;
							font-family: Helvetica, Arial,  sans-serif;
							font-size: 2.2em;
						}
						.noticia p {
							padding-left: 50px;
							padding-bottom: 10px;
							color: #333333;
							display: block;
							font-family: Helvetica;

						}
						.noticia .boton  {
							margin-top: 10px;
							padding-bottom: 30px;
							padding-right: 150px;
							position:absolute;                  
						   	right: 0;
							
						}
						.noticia .boton a { /* boton */
							font: 15px Helvetica;
						    text-decoration: none;
						    background-color: white;
						    color: #333333;
						    padding: 4px 12px 4px 12px;
						    border-radius: 10px;
						    border: 1px solid #004B98;
						}
						.noticia .boton a:hover { /* boton */
						    color: black;
						}
					.fecha {
						margin-top: 20px;
						border-right: 1px solid #C5C5C5;

		    			width: 280px;
						height: 140px;
		    			float: left;
		    			
					}
						.fecha h3 {
							padding-right: 15px;
							text-align: right;
							color: #808080;
							padding-top: 40px;
							float: right;
							display: block;
						}
						#cuerponoticias hr {
							border: 0; 
							height: 1px; 
							background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #C5C5C5, rgba(0, 0, 0, 0));
						}
		</style>
	</head>
	<body>
		 <?php require("header.html"); ?>

 		<div id="cuerpo">
 			<div id="cuerponoticias">
 				<div class="unanoticia">
		 			<div class="fecha">
		 				<h3>10 de Diciembre, 2015</h3>
		 			</div>
					<div class="noticia">
						<h1>Resultados de las últimas votaciones</h1>
						<div class="texto">
							<p>Ya puede consultar los resultados de las últimas votaciones en la sección pertinente. Estos resultados ya estan siendo discutidos en el congreso de los diputados y actuando en consecuencia con ellos. </p>
							<p>Gracias por la participación.</p>
						</div>
						<div class="boton">
							<a  href="votresult.php">+ Ver más</a>
						</div>
					</div>
				</div>
				<hr>

				<div class="unanoticia">
					<div class="fecha">
		 				<h3>15 de Noviembre, 2015</h3>
		 			</div>
					<div class="noticia">
						<h1>Disponibles nuevas votaciones</h1>
						<div class="texto">
							<p>El congreso de los diputados ha puesto a disposición de la ciudadanía un nuevo conjunto de encuestas. Ya puede entrar a votar, el resultado de estas será el decisivo y se actualizarán las leyes respectivas leyes en consonancia.</p>
							<p>Gracias por la participación.</p>
						</div>
						<div class="boton">
							<a  href="votar.php">+ Ver más</a>
						</div>
					</div>
				</div>
				<hr>
				<div class="unanoticia">
					<div class="fecha">
		 				<h3>4 de Noviembre, 2015</h3>
		 			</div>
					<div class="noticia">
						<h1>Otra noticia interesante</h1>
						<div class="texto">
							<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
						</div>
						<div class="boton">
							<a  href="#">+ Ver más</a>
						</div>
					</div>
				</div>
				<hr>
				<div class="unanoticia">
					<div class="fecha">
		 				<h3>27 de Octubre, 2015</h3>
		 			</div>
					<div class="noticia">
						<h1>Otra noticia interesante</h1>
						<div class="texto">
							<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
						</div>
						<div class="boton">
							<a  href="#">+ Ver más</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require 'footer.html'; ?>
	</body>
</html>