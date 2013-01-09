<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/fbpcnet.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>TAOT2012 - Guatemala</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script src="js/prototype.js"></script>
<script src="js/slider.js"></script> 
<script src="js/scroller.js"></script>
 <link rel="stylesheet" type="text/css" href="css/scroll.css" />
<style type="text/css">
body {
	margin: 0px;
	padding: 0px;
	background-color: #000;
}
#content {
	width: 810px;
}
#video {
	width:500px;
	margin-left: 30px;	
}
.menu,
.menu ul,
.menu li,
.menu a {
	margin: 0;
	padding: 0;
	border: none;
	outline: none;
}
/* Menu */
.menu {	
	height: 40px;
	width: 805px;
	background: #4c4e5a;
	background: -webkit-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
	background: -moz-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
	background: -o-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
	background: -ms-linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
	background: linear-gradient(top, #4c4e5a 0%,#2c2d33 100%);
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px;
}
.menu li {
	position: relative;
	list-style: none;
	float: left;
	display: block;
	height: 40px;
}

/* Links */

.menu li a {
	display: block;
	padding: 0 47px;
	margin: 6px 0;
	line-height: 28px;
	text-decoration: none;
	
	border-left: 1px solid #393942;
	border-right: 1px solid #4f5058;

	font-family: Helvetica, Arial, sans-serif;
	font-weight: bold;
	font-size: 13px;

	color: #f3f3f3;
	text-shadow: 1px 1px 1px rgba(0,0,0,.6);

	-webkit-transition: color .2s ease-in-out;
	-moz-transition: color .2s ease-in-out;
	-o-transition: color .2s ease-in-out;
	-ms-transition: color .2s ease-in-out;
	transition: color .2s ease-in-out;
}

.menu li:first-child a { border-left: none; }
.menu li:last-child a{ border-right: none; }

.menu li:hover > a { color: #8fde62; }

/* Sub Menu */

.menu ul {
	position: absolute;
	top: 40px;
	left: 0;

	opacity: 0;
	
	background: #1f2024;

	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;

	-webkit-transition: opacity .25s ease .1s;
	-moz-transition: opacity .25s ease .1s;
	-o-transition: opacity .25s ease .1s;
	-ms-transition: opacity .25s ease .1s;
	transition: opacity .25s ease .1s;
}

.menu li:hover > ul { opacity: 1; }

.menu ul li {
	height: 0;
	overflow: hidden;
	padding: 0;

	-webkit-transition: height .25s ease .1s;
	-moz-transition: height .25s ease .1s;
	-o-transition: height .25s ease .1s;
	-ms-transition: height .25s ease .1s;
	transition: height .25s ease .1s;
}

.menu li:hover > ul li {
	height: 36px;
	overflow: visible;
	padding: 0;
}

.menu ul li a {
	width: 100px;
	padding: 4px 0 4px 40px;
	margin: 0;

	border: none;
	border-bottom: 1px solid #353539;
}

.menu ul li:last-child a { border: none; }

/* Icons */

#social {
	width: 700px;
	margin-top: 30px;
	margin-right: auto;
	margin-bottom: 15px;
	margin-left: auto;
}
#video {
	margin-top: 20px;
	height: 421px;
	width: 750px;
	border: thin solid #CCC;
}
.menu a.messages { background: url(images/arrow.png) no-repeat 6px center; }
#contenido {
	width: 775px;
}
.preguntas {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 16px;
	color: #6AC13C;
	height: 35px;
	font-weight: bold;
	-webkit-border-radius: 5px 5px 0px 0px;
	-moz-border-radius:  5px 5px 0px 0px;
	border-radius:  5px 5px 0px 0px;
	-webkit-transition: opacity .25s ease .1s;
	-moz-transition: opacity .25s ease .1s;
	-o-transition: opacity .25s ease .1s;
	-ms-transition: opacity .25s ease .1s;
	transition: opacity .25s ease .1s;
	padding-top: 12px;
	padding-left: 12px;
	background-color: #333;
}
.imgmini {
	float: right;
	border: thin solid #CCC;
	padding: 3px;
	margin-top: -1px;
	margin-right: 10px;
	margin-bottom: 0px;
	margin-left: 10px;
}

.respuestas {
	padding-top: 10px;
	padding-bottom: 10px;
	padding-left: 15px;
	padding-right: 15px;
	font-weight: bold;
	-webkit-border-radius: 0px 0px 5px 5px;
	-moz-border-radius:  0px 0px 5px 5px;
	border-radius:  0px 0px 5px 5px;
	-webkit-transition: opacity .25s ease .1s;
	-moz-transition: opacity .25s ease .1s;
	-o-transition: opacity .25s ease .1s;
	-ms-transition: opacity .25s ease .1s;
	transition: opacity .25s ease .1s;
	background-color: #666;
	margin-top: -18px;
}
#texto {
	width:750px;
	margin-left: 15px;
	text-align:justify;
}
#contenido {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFF;
	text-align: center;
}
.txt {
	color: #FF0;
}
#description{
			margin-left: 10px;
			margin-right: 10px;
			color:#ffffff;
			height:375px;
			width:780px;
}
</style>
<!-- InstanceEndEditable -->
</head>
<script src="http://connect.facebook.net/en_US/all.js"></script>
<body>
<!-- InstanceBeginEditable name="EditRegion3" -->
<!-- InstanceEndEditable -->
<div id="content">
  <div id="banner"><img src="images/taot2012.jpg" width="810" height="161" alt="taot2012" /></div>
  <div id="menu"><ul class="menu">

	<li><a href="index.php">PORTADA</a></li>
	<li><a href="#">TAOT2012</a>
    	<ul>
			<li><a href="what.php" class="messages">¿QUE ES?</a></li>
			<li><a href="#" class="messages">TOUR 2012</a></li>
            <li><a href="#" class="messages">INSCRIPCIONES</a></li>
            <li><a href="#" class="messages">CONCURSO</a></li>
		</ul>
      </li>
	<li><a href="galery.php">GALERIA</a></li>
	<li><a href="#">VIDEO</a></li>
	<li><a href="contactus.php">CONTACTENOS</a></li>
</ul></div>
  <!-- InstanceBeginEditable name="EditRegion4" -->
<div id="contenido">
<img  style="margin-left:25px;"src="images/wat.png" width="750" height="163" alt="wat" />
<div id="description" class="makeScroll">
  <div id="texto">
  <p class="preguntas" >¿Que es Taot2012?</p>
  <p style="height: 150px; "class="respuestas" ><img src="images/mini.png" alt="javi martinez" width="280" height="140" class="imgmini" />TAOT2012 es el nuevo  y más ambicioso RoadShow internacional dirigido por Javi Martínez, que acercará  un método específico de trabajo a diez países hispanoparlantes visitando  diecisiete ciudades, en las que aprenderemos a planificar proyectos de una  forma sencilla y efectiva con el que evitaremos los tan odiados cambios y  correcciones a los que nos sometemos los artistas digitales.  <br />
  <br />
    <span class="txt">La finalidad de este seminario es demostrar la simplicidad de este motor de Render para obtener trabajos profesionales en poco tiempo, evitando parámetros inecesarios, para este fin. </span></p>
  <p class="preguntas">¿Qué haremos?</p>
  <p style="height: 180px; "class="respuestas"><img src="images/mini2.png" alt="autodesk &amp; v-ray" width="280" height="140" class="imgmini" />Basaremos las Master  Class en las últimas versiones de AUTODESK 3DS MAX y V-RAY incluyendo en este  último su novedoso V-RAY 2.0 con sus últimas novedades de render en tiempo real  RT.
    <br />
    <br />
    Veremos como  plantear los pasos de producción, como optimizar los tan temidos parámetros de  V-Ray simplificándolos radicalmente a cinco puntos vitales y olvidándonos del  resto de posibilidades que nos ofrece dicho motor de render con el único fin de  obtener escenas fotorealísticas en el menor tiempo de producción posible. 
  Desglosaremos  ejercicios técnicos de la obra audiovisual dirigida por Javi Martínez &quot;The  Accuracy Of Time...la precisión del tiempo&quot;,  <br />
  donde veremos las técnicas de  iluminación, render y post-producción utilizadas.  </p>
  <p class="preguntas">¿Qué beneficio  tiene?</p>
  <p style="height: 150px;" class="respuestas"><img src="images/mini3.png" alt="taotguate" width="280" height="140" class="imgmini" />Las Master Class nos  llevará a conocer los secretos profesionales que utilizan diariamente los  profesionales de la industria de hoy en día, ya sea en sectores como la  televisión, el cine, la arquitectura y la publicidad.
  Sin abandonar la  trayectoria de la master-class, veremos como afrontar proyectos publicitarios  pata tv desde su planteamiento hasta su finalización pasando por las  atribuciones de recursos humanos y técnicos, organización de campañas de  marketing, etc.
    <br />
    <br />
    TAOT2012 aporta  soluciones prácticas bajo técnicas lógicas y muy simples...
  ¿Piensas que no vale  la pena formarse con los mejores?</p>
</div>
</div>
</div>
<!-- InstanceEndEditable -->
   </div>
  </div>
</div>
</div>
</body>
<!-- InstanceEnd --></html>
