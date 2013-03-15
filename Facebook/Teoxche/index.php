<!doctype html>
<html lang="es-gt">
<head>
<meta charset="utf-8">
<title>Pcnet Media</title>
<link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen"/>
<link rel="stylesheet" type="text/css" href="assets/css/style3.css" />
<link rel="stylesheet" type="text/css" href="assets/css/common.css" />
<link rel="shortcut icon" href="http://www.pcnetmedia.com/assets/ico/favicon.ico" />

<script type="text/javascript" src="assets/js/modernizr.custom.79639.js"></script> 
<!--[if lte IE 8]><style>.main{display:none;} .support-note .note-ie{display:block;}</style><![endif]-->
</head>
<body>
	<div id="wrapper">
		<header>
			<img src="assets/images/acti.png">
			<!--<h3>#</h3>
			<h4>#</h4>
			<div style="text-align:left; margin: 0 0 0 90px; font-size:15px;">:&nbsp;<br />
				<br />
				&nbsp;&bull; Dise&ntilde;o Web
				<div>
					&nbsp;&bull; Internet Marketing</div>
				<div>
					&nbsp;&bull; Dise&ntilde;o Grafico</div>
			</div>
			<br />-->
			

		</header>

		<section class="sus">
				<div class="col">Contáctanos</div><br><br>
				<p style="text-align: left;">¿Deseas más información? Cuente con nosotros.
					Si desea contactarse con nosotros, puede hacerlo a través del siguiente formulario. 
					Nos pondremos en contacto en breve. <br>
					<br>
					<a href="mailto:ecastellanos@fundacionteoxche.org">ecastellanos@fundacionteoxche.org</a> </p> 
				<script type="text/javascript">var submitted=false;</script>
			    <iframe name="hidden_iframe" id="hidden_iframe"
			    style="display:none;" onload="if(submitted)
			    {window.location='http://www.pcnetmedia.com/Facebook/teoxche/index.php';}"></iframe>
			    <form action="https://docs.google.com/spreadsheet/formResponse?formkey=dGR0ZXJLeGhSNjhwQ1ZQdERqZjdlY3c6MA&amp;ifq" method="post"
			    target="hidden_iframe" onsubmit="submitted=true;">
				<br>
				<div class="errorbox-good">
				<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_0">Nombre:
				<span class="ss-required-asterisk">*</span></label>
				<label class="ss-q-help" for="entry_0"></label>
				<input type="text" name="entry.0.single" value="" class="ss-q-short" id="entry_0"></div></div></div>
				<br> <div class="errorbox-good">
				<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_2">Email:
				<span class="ss-required-asterisk">*</span></label>
				<label class="ss-q-help" for="entry_2"></label>
				<input type="text" name="entry.2.single" value="" class="ss-q-short" id="entry_2"></div></div></div>
				<br> <div class="errorbox-good">
				<div class="ss-item ss-item-required ss-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_5">Telefono
				<span class="ss-required-asterisk">*</span></label>
				<label class="ss-q-help" for="entry_5"></label>
				<input type="text" name="entry.5.single" value="" class="ss-q-short" id="entry_5"></div></div></div>
				<br> <div class="errorbox-good">
				<div class="ss-item ss-item-required ss-paragraph-text"><div class="ss-form-entry"><label class="ss-q-title" for="entry_7">Mensaje
				<span class="ss-required-asterisk">*</span></label>
				<label class="ss-q-help" for="entry_7"></label>
				<textarea name="entry.7.single" rows="8" cols="75" class="ss-q-long" id="entry_7"></textarea></div></div></div>
				<br>
				<input type="hidden" name="pageNumber" value="0">
				<input type="hidden" name="backupCache" value="">


				<div class="ss-item ss-navigate"><div class="ss-form-entry">
				<input type="submit" name="submit" value="Enviar"></div></div></form>
				
		</section>

		<div class="clear"></div>

		<footer>
				<hr>
        		<div id="texto_creditos">Powered by <a href="http://www.facebook.com/PcNetmedia/app_216924904991602" target="_blank"> Pcnet Media</a></div>
		</footer>
	</div>

	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script type="text/javascript" src="https://raw.github.com/Indamix/real-shadow/master/realshadow.js"></script>
	<script type="text/javascript">

	$(function(){
		$('button, .container, .text').realshadow({
			pageY: 190
		});
	});
	</script>

	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
        <script type="text/javascript" src="assets/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
        <script type="text/javascript" src="assets/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
        <link rel="stylesheet" type="text/css" href="assets/fancybox/jquery.fancybox-1.3.4.css" media="screen" />

        <script type="text/javascript">
        $(document).ready(function() {
            $(".video").click(function() {
                $.fancybox({
                    'autoScale'     : true,
                    'transitionIn'  : 'elastic',
                    'transitionOut' : 'none',
                    'title'         : this.title,
                    'href'          : this.href.replace(new RegExp("watch\\?v=", "i"), 'v/'),
                    'type'          : 'swf',
                    'swf'           : {
                    'wmode'             : 'transparent',
                    'allowfullscreen'   : 'true'
                    }
                });

                return false;
            });

            $("a[rel=portfolio]").fancybox({
				'width'				: '80%',
				'height'			: '80%',
		        'autoScale'     	: false,
		        'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'type'				: 'iframe',
				'titlePosition'     : 'inside'
			});

			$("a[rel=portfolio2]").fancybox({
				'width'				: '80%',
				'height'			: '80%',
		        'autoScale'     	: false,
		        'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'type'				: 'iframe',
				'titlePosition'     : 'inside',
			});

			$("a[rel=portfolio3]").fancybox({
				'width'				: '80%',
				'height'			: '80%',
		        'autoScale'     	: false,
		        'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'type'				: 'iframe',
				'titlePosition'     : 'inside',
			});

		
        });
        </script>
		
</body>
</html>