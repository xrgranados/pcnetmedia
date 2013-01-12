<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pcnet Media</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript" charset="utf-8">
	$(function(){
		$('#menu li a').click(function(event){
			var elem = $(this).next();
			if(elem.is('ul')){
				event.preventDefault();
				$('#menu ul:visible').not(elem).slideUp();
				elem.slideToggle();
			}
		});
	});
	</script>
<style type="text/css">
#menu{
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px;
	-webkit-box-shadow:1px 1px 3px #888;
	-moz-box-shadow:1px 1px 3px #888;
}
#menu li{border-bottom:1px solid #FFF;}
#menu ul li, #menu li:last-child{border:none}	
#menu a{
	display:block;
	color:#ffffff;
	text-decoration:none;
	padding:3px 5px;
	text-align: center;
	font-family:Verdana, Geneva, sans-serif; 
	font-size:16px
}
#menu a:hover{
	color:#ffffff;
	-webkit-transition: color 0.2s linear;
}
#menu ul a{background-color:#f89820;}
#menu ul a:hover{
	background-color:#FFF;
	color:#2961A9;
	text-shadow:none;
	-webkit-transition: color, background-color 0.2s linear;
}
ul{
	display:block;
	background-color:#2961A9;
	margin:0;
	padding:0;
	width:500px;
	list-style:none;
	
}
#menu ul{background-color:#a0be3c;}
#menu li ul {display:none;}
.menu {
	font-family: Verdana, Geneva, sans-serif;
	color: #4C721D;
	font-size: 24px;
	text-align: center;
}
</style>
</head>

<body style="margin:0; padding:0; background:#ffffff;">
<div style="margin:0; padding:0; background:#fff2c8; width:500px; font-family:Arial, Helvetica, sans-serif; font-size:12px; color:#d8d8d8;">
<div style="padding: 10px; background:#fff2c8; text-align:left;"><img src="../images/quiznos_logo.png" alt="Menu Quiznos" width="164" height="156" border="0" /><img src="../images/foto_menu.png" width="315" height="182" alt="menu quiznos" /><br />
  <br />
  <span class="menu"><strong>Menu Quiznos</strong></span><hr align="center" noshade="noshade"/>
</div>

<ul id="menu">
<li><a href="#"><strong>Originales</strong></a>
	<ul>
    <img src="../images/menu1a.png" alt="Menu Quiznos" />
	</ul>
</li>
<li><a href="#"><strong>Premium</strong></a>
	<ul>
	<img src="../images/menu1b.png" alt="Menu Quiznos" />
	</ul>
</li>
<li><a href="#"><strong>Roller Wraps</strong></a>
	<ul>
    <img src="../images/menu1c.png" alt="Menu Quiznos" />
	</ul>
</li>
<li><a href="#"><strong>Ensaladas</strong></a>
	<ul>
    <img src="../images/menu1e.png" alt="Menu Quiznos" />
    </ul>
</li>
<li><a href="#"><strong>Sopas</strong></a>
	<ul>
    <img src="../images/menu1d.png" alt="Menu Quiznos" />
    </ul>
</li>
</ul>
<div style="clear:both; height:75px; background:#a0be3c; text-align:center; margin:5px 0 0 0;">
<div style="color:#8a4a00; font-size:11px; padding:10px 0 10px 0;">Copyright &copy; Quiznos Guatemala <a href="http://www.quiznos.com.gt" target="_blank" style="color:#8a4a00; font-size:11px;">www.quiznos.com.gt</a><br>Powered by <a href="https://www.facebook.com/PcNetmedia/app_216924904991602" target="_blank"><img src="../images/logoweb.png" style="padding: 5px 0 0 5px;" title="Pcnet Media"></a></div>
</div>
</div>
</body>
</html>