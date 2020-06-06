<!DOCTYPE html>
<html>
	<head>
		<title>Registros Conmaje's</title>
		<meta name="author" content="tec.marco eleazar muñoz santiago", "tec.jesus eduardo arredondo cortes" />
		<meta name="owner" content="tec.marco eleazar muñoz santiago","tec.jesus eduardo arredondo cortes" />
		<meta name="keywords" content="consulta, registros, formulario, conmajes" />
		<meta name="description" content="codigo sql para consultar" />
		<link href="imagenes/imagen151.png" rel="shortcut icon" />	
		<style type="text/css">
			estilos	{}
			/*universal*/
			#cont	{width: 90%;
				margin: 0 auto;
				background-color: #FFFFFF;
				border-style: double;
				border-color: #31906C;
				box-shadow: 5px 5px 10px white;}

			/*universal*/
			#cab	{width: 100;
				background-color: #3D8F3D;
				text-align: center;}
			
			#zaz	{margin-left: 30px;
				width: 95%;}

	
			body	{width: auto margin 0;
				margin-top: 0;
				margin-bottom: 0;}

			.enl	{font-size: 20px;
				background-color: #219E36;
				color: white;
				text-decoration: none;
				margin-left: 3px;
				padding: 14px 12px;
				border-radius: 10px;}

			.enl:hover	{transition-duration: 0.7s;	
					background-color: #000000;	
					color: #D6E25A;}
	

			.log	{width: 270px;
				height: 140px;
				border-radius: 10%;}

			
			.nts	{width: 50px;
				height: 50px;
				border-radius: 10%;
				transition-duration: 1.5s;}

			.nts:hover	{transition-duration: 1.2s;
					width: 100px;
					height: 100px;
					border-radius: 10%;
					opacity: 0.2;}

			#bfin	{text-align: center;
				background-color:  #3D8F3D;
				color: white;
				width: 100%}

			.bar	{font-size: 15px;
				color: white;
				text-decoration: none;
				margin-left: 3px;
				transition-duration: 1.2s;}

			.bar:hover	{color: #D6E25A;
					transition-duration: 1.1s;}

			mans	{color: #21AA4A;
				font-family: Courier New;
				font-size: 35pt;}

			th#se	{color: #A583B9;
				font-family: arial;
				font-size: 15px;} 

			th#ye	{color: #F06713;
				font-family:  Candara;
				font-size: 20px;} 	
		</style>	
	</head>
	<body style="background-image: url('imagenes/imagen12.jpg'); background-repeat: no-repeat; background-size: 100; background-attachment: fixed;">
		<div id="cont">
			<div id="cab">
				<center><a href="index.html"><img src="imagenes/imagen13.png" class="log" /></a></center><br>
			</div>
			<br>
			<br>
			<center><mans>Estos son las usuarios que han entrado a nuestro sitio web y compartieron tanto su experiencia como sus comentarios.</mans></center>
			<br>
			<br>
			<div id="zaz">
				<?php
					$server="localhost";
					$pers="root";
					$contraseña="";
					$bd="formulario conmaje's";
					$conexion=mysqli_connect("127.0.0.1","root","")
					or die("Upps tu GameCard no se conecto al servidor");
					$db=mysqli_select_db($conexion,"formulario conmaje's")
					or die("Hey tu consola no se pudo encontrar");
					$consulta=mysqli_query($conexion,"SELECT * from registros")
					or die ("eror al mostrar los datos");

					echo '<table width="100%" border="2">';
					echo '<tr />';
					echo '<th id="ye" id="nombres">Nombres</th>';
					echo '<th id="ye" id="apellidos">Apellidos</th>';
					echo '<th id="ye" id="numero">Numero telefonico</th>';
					echo '<th id="ye" id="edad">Edad</th>';
					echo '<th id="ye" id="genero">Genero</th>';
					echo '<th id="ye" id="videojuego">Videojuego Favorito</th>';
					echo '<th id="ye" id="consolas">Consola Favorita</th>';
					echo '<th id="ye" id="comentarios">Comentarios</th>';
					echo '<tr />';
				
					while($extraido=mysqli_fetch_array($consulta))
					{
						echo '<tr />';
						echo '<th id="se">'.$extraido['nombres'].'</th>';
						echo '<th id="se">'.$extraido['apellidos'].'</th>';
						echo '<th id="se">'.$extraido['numero'].'</th>';
						echo '<th id="se">'.$extraido['edad'].'</th>';
						echo '<th id="se">'.$extraido['genero'].'</th>';
						echo '<th id="se">'.$extraido['videojuego'].'</th>';
						echo '<th id="se">'.$extraido['consolas'].'</th>';
						echo '<th id="se">'.$extraido['comentarios'].'</th>';
						echo '<tr />';
					}
					mysqli_close($conexion);
					echo '</table>';
				?>
			</div>
			<br>
			<br>
			<center><img src="imagenes/imagen71.gif" class="enl" /></center>
			<br>
			<br>
			<!--inicia la barra corpotativa y los ultimos botones de la pagina web-->
			<table align="center">
				<caption>&nbsp;</caption>
				<tr>
					<th width="400px"><a href="javascript: history.go(-1)" class="enl">Volver</a></th>
					<th width="400px"><a href="index.html" class="enl">Ir a Inicio</a></th>
				</tr>
			</table>
			<br>
			<br>
			<div id="bfin">
				<table align="center">
					<caption>&nbsp;</caption>
					<tr>
						<th width="400px">
							<font size="5">Redes Sociales</font><br>
							<a href= "https://www.facebook.com/profile.php?id=100008085962173"><img src="imagenes/imagen19.png"  class= "nts" /></a>
							<a href= "https://www.instagram.com/p/B5oImOgAr2fzuloawomrHLFmod4opoR5qDXD780/"><img src="imagenes/imagen22.jpg"  class= "nts" /></a>
							<a href= "https://api.whatsapp.com/send?phone=5561929471&text=Hola&source=&data=&app_absent="><img src="imagenes/imagen23.png"  class= "nts" /></a><br><br>
						</th>
						<th width="400px">
							<a href="aviso.html" class="bar" >AVISO DE PRIVACIDAD</a></center><br>
							<a href="conma.html" class="bar" >Conmaje&acute;s  &#169; 2020</a></center><br>
							<a href="politicas.html" class="bar" >POL&Iacute;TICA DE TERMINOS Y CONDICIONES</a></center>
						</th>
						<th width="400px">
							<center><a href="https://www.xbox.com/es-MX/" class="bar" >Sitio de Microsoft</a></center>
						</th>
					</tr>
				</table>
			</div>
		</div>
		<noscript>
			<p>Tu navegador no soporta JavaScript<br>
			actualiza tu navegador</p>
		</noscript>
	</body>
</htm>