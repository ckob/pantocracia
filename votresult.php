<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Pantocracia</title>

	    <!--Load the AJAX API-->
	    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
	    <script type="text/javascript">


	      // Load the Visualization API and the piechart package.
	      google.load('visualization', '1.0', {'packages':['corechart']});

	      // Set a callback to run when the Google Visualization API is loaded.
	      google.setOnLoadCallback(vot1);
	      google.setOnLoadCallback(vot2);
	      google.setOnLoadCallback(vot3);
	      google.setOnLoadCallback(vot4);
	      google.setOnLoadCallback(vot5);

	      // Actualitza la mida de les votacions cada cop que es mou la mida del navegador o es fa zoom
	      function actualizar() {
	      	vot1();
	      	vot2();
	      	vot3();
	      	vot4();
	      	vot5();
	      }
	      // Callback that creates and populates a data table,
	      // instantiates the pie chart, passes in the data and
	      // draws it.
	      function vot1() {

	        // Create the data table.
	        var data = google.visualization.arrayToDataTable([
	          ['Respuesta', 'Votos'],
	          ['Libertad para las mujeres sobre la decisión', 25563286],
	          ['Permitir el aborto solo en casos determinados', 5649285],
	          ['Prohibir el aborto', 1687395],
	          ['Ns/Nc', 369216]
        	]);

	        // Set chart options
	        var options = {'title':'¿Qué opina sobre el aborto libre?'};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('vot1'));
	        chart.draw(data, options);
	      }


	      function vot2() {

	        // Create the data table.

	        var data = google.visualization.arrayToDataTable([
	          ['Pregunta', 'Votos'],
	          ['Sí, siempre', 1246832],
	          ['Solo en casos muy justificados', 5379685],
	          ['No, de ninguna manera', 15168495],
	          ['Ns/Nc', 149658]
        	]);


	        // Set chart options
	        var options = {'title':'¿Está a favor de la acogida de refugiados?'};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('vot2'));
	        chart.draw(data, options);
	      }

	      function vot3() {

	        // Create the data table.

	        var data = google.visualization.arrayToDataTable([
	          ['Pregunta', 'Votos'],
	          ['Sí, únicamente filosofía', 21379648], 
	          ['No, únicamente religión', 15239485],
	          ['A elección del alumno', 5176485],
	          ['Ns/Nc', 1289465]
        	]);


	        // Set chart options
	        var options = {'title':'¿Deberíamos tener filosofía en vez de religión en la educación?'};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('vot3'));
	        chart.draw(data, options);
	      }

	      function vot4() {

	        // Create the data table.

	        var data = google.visualization.arrayToDataTable([
	          ['Pregunta', 'Votos'],
	          ['Sí', 5346785],
	          ['No', 20164853],
	          ['Ns/Nc', 514096]

        	]);


	        // Set chart options
	        var options = {'title':'¿Está a favor de las corridas de toros?'};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('vot4'));
	        chart.draw(data, options);
	      }

	      function vot5() {

	        // Create the data table.

	        var data = google.visualization.arrayToDataTable([
	          ['Pregunta', 'Votos'],
	          ['Sí, ambos generos están igualados de cara a la ley', 3141656],
	          ['No, las leyes actuales benefician más a las mujeres', 25645985],
	          ['No, las leyes actuales benefician más a los hombres', 7638194],
	          ['Ns/Nc', 514096]
        	]);


	        // Set chart options
	        var options = {'title':'¿Cree qué las leyes españolas en contra de la violencia y discriminacion de genero son igualitarias?'};

	        // Instantiate and draw our chart, passing in some options.
	        var chart = new google.visualization.PieChart(document.getElementById('vot5'));
	        chart.draw(data, options);
	      }
	    </script>

	    <style>
	    	.grafic {
	    		width: calc(100vw-315px);
	    		height: 100%;
	    		margin: 0 auto;
	    	}
	    	#cuerpo { 
	    		/* height: 70vh; /* fa el 70% de la altura total que mostra el navegador */
	    		height: calc(100vh - 410px);
	    	}
			#menu {
				float: left;
				width: 300px;
				height: 100%;
				border-right: 1px solid #808080;
				background-color: #F7F7F7;
				overflow: auto;
			}
			#vots {
				float: right;
				position: relative;
				height: 100%;
				/*width: 800px; */
				/*width: calc(100vw - 315px);*/
				width: calc(100vw - 350px);
				overflow: auto;
				font-size: 130%;
			}
			#vots hr {
				border: 0; 
				height: 1px; 
				background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #004B98, rgba(0, 0, 0, 0));
			}
			#menu ul {
				font-size: 110%;
				font-family: Helvetica, Arial,  sans-serif;
			}
			#menu li {
				padding-top: 7px;
				padding-bottom: 7px;
				border-bottom: 1px solid #808080;
			}
			#menu li:hover {
				background-color: white;
			}
			#menu a {
				margin-left: 15px;
				display: block;
			}

		</style>
	</head>
	<body onresize="actualizar()">
		 <?php require("header.html"); ?>

 		<div id="cuerpo">
			<div id="vots">
				<div class="grafic" id="vot1"></div>
				<hr>
				<div class="grafic" id="vot2"></div>
				<hr>
				<div class="grafic" id="vot3"></div>
				<hr>
				<div class="grafic" id="vot4"></div>
				<hr>
				<div class="grafic" id="vot5"></div>
			</div>
			<div id="menu">
 				<ul>
					<li><a href="#vot1">¿Qué opina sobre el aborto libre?</a></li>
					<li><a href="#vot2">¿Está a favor de la acogida de refugiados?</a></li>
					<li><a href="#vot3">¿Deberíamos tener filosofía en vez de religión en la educación?</a></li>
					<li><a href="#vot4">¿Está a favor de las corridas de toros?</a></li>
					<li><a href="#vot5">¿Cree qué las leyes españolas en contra de la violencia y discriminacion de genero son igualitarias?</a></li>
				</ul>
 			</div>
		</div>
		<?php require 'footer.html'; ?>
	</body>
</html>