<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="css/font-awesome-4.5.0/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>Pantocracia</title>
		<style>
			#menu {
				float: left;
				width: 300px;
				height: 100vh;
				overflow: auto;
				
			}
				#menu ul {
					position: fixed;
					width: 300px;
					font-size: 110%;
					font-family: Helvetica, Arial,  sans-serif;
					/*border-top: 1px solid #808080;*/

					overflow: auto;
					clear: left;
				}
					#menu li {
						padding-top: 7px;
						padding-bottom: 7px;
						/*border-bottom: 1px solid #808080;
						border-right: 1px solid #808080; */
					}
					#menu li:hover {
						background-color: #F7F7F7;
					}
						#menu a {
							margin-left: 15px;
							display: block;
						}
			#bigvoto {
				float: left;
				/*position: relative;*/
				height: 100%;
				/*width: 800px; */
				/*width: calc(100vw - 315px);*/
				width: calc(100vw - 350px);
				overflow: auto;
				font-size: 130%;
				clear: right;
			}
				.voto {
					padding-top: 10px;
					padding-bottom: 10px;
					padding-left: 10px;
					width: calc(100% - 20px);
					height: 100%;
	    			border-top: 1px solid #808080; 
	    			font-family: Helvetica, Arial, sans-serif;
					color: #333;

				}
					.voto h2 {
						font-size: 200%;
						margin: 10px;
					}
					.voto p {
						margin: 15px;
						padding-left: 30px;
					}
					.voto form {
						padding: 15px;
						padding-left: 30px;
						margin: auto; /* Para centrar */
						width: 300px;
					}
					
					.voto hr {
						border: 0; 
						height: 1px; 
						background-image: linear-gradient(to right, rgba(0, 0, 0, 0), #004B98, rgba(0, 0, 0, 0));
					}
					.voto input[type="submit"] {
						color: white;
						background-color: #004B98;
						border-color: #004B98;
						display: block;
						margin: 0;
						width: 280px;
						height: 40px;
						font-family: sans-serif;
						font-size: 18px;
						appearance: none;
						box-shadow: none;
						border-radius: none;
					}
					.voto input[type="submit"]:hover {
						background-color: #0069D4;
					}
					.voto input[type="radio"]:checked + label {
						padding: 50px;
						color: red;
					}
		</style>
	</head>
	<body>
		 <?php require("header.html"); ?>

 		<div id="cuerpo">
			<div id="menu">
				<ul>
					<li><a href="#vot1">Ejemplo de votación</a></li>
					<li><a href="#vot2">Ir a la 2a votación</a></li>
					<li><a href="#vot3">Ir a la 3a votación</a></li>
					<li><a href="#vot4">Ir a la 4a votación</a></li>
					<li><a href="#vot5">Ir a la 5a votación</a></li>
					<li><a href="#vot6">Ir a la 6a votación</a></li>
					<li><a href="#vot7">Ir a la 7a votación</a></li>
					<li><a href="#vot8">Ir a la 8a votación</a></li>
					<li><a href="#vot9">Ir a la 9a votación</a></li>
				</ul>
			</div>

			<div id="bigvoto">
				<div class="voto" id="vot1">
					<h2>Ejemplo de votación</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
				<div class="voto" id="vot2">
					<h2>Ejemplo de votación 2</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
				<div class="voto" id="vot3">
					<h2>Ejemplo de votación 3</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
				<div class="voto" id="vot4">
					<h2>Ejemplo de votación 4</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
				<div class="voto" id="vot5">
					<h2>Ejemplo de votación 5</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
				<div class="voto" id="vot6">
					<h2>Ejemplo de votación 6</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
				<div class="voto" id="vot7">
					<h2>Ejemplo de votación 7</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
				<div class="voto" id="vot8">
					<h2>Ejemplo de votación 8</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
				<div class="voto" id="vot9">
					<h2>Ejemplo de votación 9</h2>
					<p>Lorem ipsum dolor sit amet, arcu vestibulum suspendisse non. Hac wisi nulla, turpis id amet interdum eget sit turpis. Magna at elit sit nullam augue lectus, et eleifend tristique felis risus sed porta, rutrum porta facilisis. Augue accumsan turpis sed risus turpis pellentesque, arcu tellus aptent erat parturient turpis, eget lacinia dui mi sit, eleifend rutrum nulla cubilia fermentum ut vitae, imperdiet vestibulum interdum suspendisse erat vel massa. A adipiscing aenean, tortor nam id fringilla sit. Nullam sed, quam dolor libero justo cras amet integer, in at purus velit rhoncus penatibus sed. Eu et in, lorem vitae est, blandit ut est fusce lorem, sed tempus. Consequat sit quisque egestas nulla parturient.</p>
					<p>Arcu auctor. Torquent at neque eget nunc diam vehicula. Eros neque tempus varius, ut justo sapien adipiscing. Sapien magna. Erat habitant, montes potenti leo eget felis risus auctor, nam aliquam mattis tristique donec quam elit. Leo est suspendisse ligula, nonummy nunc nunc praesent in, quisque tincidunt ultrices neque ultricies, nunc at turpis quam et quam tristique. Urna aptent libero cumque diam in id, id congue accumsan vehicula. Pede lobortis aliquam potenti nam senectus, nullam quis id a erat, dui scelerisque duis libero. Nullam blandit in viverra dui pretium. Nec vitae pellentesque wisi magnis, ultrices eleifend in eget lacus non. Viverra purus sit urna amet.</p>
					<p>Lacinia sed ligula, pellentesque tellus vivamus integer molestie nec in, nisl quam sit dolor leo viverra molestie, gravida aenean massa elementum pellentesque quis. Lorem dapibus vestibulum mauris, at nulla, donec massa, non fusce sed auctor id nullam bibendum, orci habitasse. Vulputate id libero semper integer tellus, mauris vestibulum, euismod ac, nunc adipiscing leo dis aliquet ipsum, sed luctus nam. Lorem penatibus interdum integer dui fermentum metus, nisl risus turpis lorem in. Mollis suspendisse placerat per morbi malesuada, tortor mauris, viverra duis aliquet, sed odio dolor, sodales dignissim. Libero vestibulum, pede class lacinia arcu, magna tellus. Nulla felis, ipsum nec, error est orci fusce, orci elit habitasse mauris nam massa, morbi nunc neque id nec leo interdum. Non est scelerisque maecenas lorem nulla vel, integer turpis, tempus praesent, vestibulum pellentesque ante sem cras ante.</p>
					<hr>
					<div class="centrar">
						<form>
							<input type="radio" name="resultado" value="opc1"> Primera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc2"> Segunda opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc3"> Tercera opcion de la votación
							<br>
							<input type="radio" name="resultado" value="opc4"> Cuarta opcion de la votación
							<br><br>
							<input type="submit" value="Votar">
						</form>
					</div>
				</div>
			</div>
			
		</div>
		<?php require 'footer.html'; ?>
	</body>
</html>