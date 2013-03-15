













































































































<!DOCTYPE html>
<html lang="es-gt">
<!--[if IE 8]>         <html class="no-js ie ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>

        <?php include_once("include/head/metas.php"); ?>
        <title>Pcnet Media</title>
        <link rel="stylesheet" href="assets/css/style.css">

        <script type="text/javascript">

              var _gaq = _gaq || [];
              _gaq.push(['_setAccount', 'UA-37597076-1']);
              _gaq.push(['_trackPageview']);

              (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
              })();

        </script>

    </head>
    <body>

        
        <!-- Contact us -->


        <div class="parentContainer" id="contactUs">
            <section>
                <header class="clearfix">
                    <img src="assets/img/icons/contactImg.png" class="hImg" alt="">
                    <h1>Contact</h1>
                    <h2>Tu mensaje ha sido envido exitosamente.</h2><br><br>
                    <p> <a class="" href="index.php"> Regrea a la pagina principal</a></p>
                </header>
                <div class="leftColumn clearfix">
                    <div>
                        <div class="phone">
                            <span>Phone Img</span>
                            <a href="callto:+50222689427" class="call"> +502 2268 9427</a>
                            <p>(8:00 - 18:00)</p>
                        </div>
                        <div class="email">
                            <span>Mail Img</span>
                            <a href="mailto:info@pcnetmedia.com" class="mail">info@pcnetmedia.com</a>
                        </div>
                    </div>
                    <div>
                        <img src="assets/img/worldMap.png" class="mainMap" alt="">
                        <div id="adress">
                        <span>Pointer</span>
                            <div>
                               <h3><span>Guatemala</span>, Guatemala, 8va. Calle 4-24 Z. 10</h3>
                            </div>
                        </div>
                    </div>
                </div>
                   
            </section>
        </div>


        <!-- Footer -->


        <div class="parentContainer" id="footer">
            <section>
                <p>© 2013  Pcnet Media</p>
                <ul class="socialIcons clearfix">
                    <li><a href="http://www.facebook.com/PcNetmedia" class="facebook" target="_blank">facebook</a></li>
                    <li><a href="https://twitter.com/pcnetmedia" class="twitter" target="_blank">twitter</a></li>
                    <li><a href="#" class="linkedin">linkedin</a></li>
                    <li><a href="https://plus.google.com/105198695457691312956" class="gplus" target="_blank">gplus</a></li>
                </ul>
            </section>
        </div>

        <a href="#" class="top">Back to Top</a>


        <!-- END SITE CONTENT -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="assets/js/plugins.min.js"></script>
        <script src="assets/js/scripts.min.js"></script>

        <script type="text/javascript">
        /* <![CDATA[ */
        function clickExplorer() {
        if( document.all ) {
        alert('Todo el contenido en este sitio esta protegido por los derechos de autor y esta prohibido su copia');
        }
        return false;
        }
        function clickOther(e) {
        if( document.layers || ( document.getElementById && !document.all ) ) {
        if ( e.which == 2 || e.which == 3 ) {
        alert('Todo el contenido en este sitio esta protegido por los derechos de autor y esta prohibido su copia');
        return false;
        }
        }
        }
        if( document.layers ) {
        document.captureEvents( Event.MOUSEDOWN );
        document.onmousedown=clickOther;
        }
        else {
        document.onmouseup = clickOther;
        document.oncontextmenu = clickExplorer;
        } /* ]]> */ /* <![CDATA[ */ window.addEvent('domready', function() {
        document.body.oncopy = function() {
        alert('Todo el contenido en este sitio esta protegido por los derechos de autor y esta prohibido su copia');
        return false; } });
        if( typeof( document.onselectstart ) != 'undefined' )
        document.onselectstart = function(){ return false };
        document.ondragstart = function(){ return false } /* ]]> */
        </script>
       
    </body>
</html>

