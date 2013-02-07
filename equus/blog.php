<!DOCTYPE html>
<html lang="es-gt">
    <head>

        <title>EQUUS Guatemala</title>
        <?php include_once("include/head_metas.php"); ?>
        
         <style type="text/css">

            .menu li.active5 {
                background: url('assets/img/menu_bg.png') repeat; 
                -webkit-border-radius: 0px 0px 7px 7px;
                   -moz-border-radius: 0px 0px 7px 7px;
                        border-radius: 0px 0px 7px 7px;
                -webkit-box-shadow: 0px 0px 15px #000000;
                   -moz-box-shadow: 0px 0px 15px #000000;
                        box-shadow: 0px 0px 15px #000000;
                opacity: 1;
            }
            .menu li.active5 > a {
                color: black; 
            }

        </style>

    </head>
    <body>
        
        <!-- Header -->
        <?php include_once("include/header.php"); ?>

        <!-- Arrow Navigation 
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a> -->
    
        <!-- Time Bar  -->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>

           
        <div class="container">
            <section>
                <article>
                    <a href="blog/color-turquesa.php"><img src="assets/images/blog/turquesa.png" alt="Blog Equus">
                    <div class="desc">
                        <h2>Color de Verano: Turquesa</h2></a> <br>
                            <p>Uno de los colores que han surgido a lo largo de las últimas semanas 
                            en las noticias de la moda reciente, fue el turquesa. En referencia a los 
                            colores marítimos y piedras preciosas, turquesa es sinónimo de lujo y 
                            sofisticación y promete aclarar el color de piel bronceada para este verano, 
                            tanto en la ropa y en los accesorios. En Maquillaje
                            El color es fresco y combina a la perfección con los días cálidos y soleados. 
                            El tono ya es un éxito en las calles y entre muchas celebridades. El maquillaje 
                            es divertido e irreverente y es una gran opción para iluminar la mirada femenina 
                            este verano!
                            </p>
                    </div>
                </article>
                <article>
                    <a href="blog/verano-delicado.php"><img src="assets/images/blog/verano-delicado.png" alt="Blog Equus">
                     <div class="desc">
                        <h2>Verano delicado</h2></a> <br>
                            <p>La suavidad de los colores promete de este verano sea, 
                                ademas de todo, un verano delicado. Después de una ola de 
                                colores vivos, vienen pantalones de color en tonos azucarados. 
                                Los colores pastel entraron en la temporada de verano en plena 
                                vigencia. Son suaves, tímidos, pero llenos de dulzura y estilo. 
                                Con huella retro, los dulces colores se pueden combinar para un estilo más audaz.
                            </p>
                    </div>
                </article>
                <article>
                    <a href="blog/rayas.php"><img src="assets/images/blog/rayas.png" alt="Blog Equus">
                     <div class="desc">
                        <h2>Juego Colores: rayas</h2></a> <br>
                            <p>Las rayas son las impresiones que estuvieron siempre presentes en 
                                el mundo de la moda! Dicen que las rayas horizontales engordan la 
                                silueta mientras que el vertical adelgaza, pero la verdad es que no hay 
                                ninguna regla que impida nuestra utilizar este estilo sin miedo. Para 
                                obtener un resultado más discreto, el consejo es apostar a una sola prenda.
                            </p>
                    </div>
                </article>
                <article>
                    <a href="blog/cinto.php"><img src="assets/images/blog/cinto.png" alt="Blog Equus">
                     <div class="desc">
                        <h2>Accesorios: Cinturón de Metal</h2></a> <br>
                            <p>Una de las tendencias del momento son las cinturones metálicos. 
                                El accesorio ya ha sido el encanto para celebridades y la moda de hoy en día, 
                                utilizando la pieza para darle un toque de sofisticación y estilo a la ropa para cualquier ocasión. 
                            </p>
                    </div>
                </article>
            </section>
        </div>
        

        <?php include_once("include/supersized.php"); ?>
        <script type="text/javascript">
        jQuery.noConflict();
            jQuery(function(jQuery){
                jQuery.supersized({
                    // Components                           
                    slide_links             :   'blank',    // Individual links for each slide (Options: false, 'num', 'name', 'blank')
                    thumb_links             :   1,          // Individual thumb links for each slide
                    thumbnail_navigation    :   0,          // Thumbnail navigation
                    slides                  :   [           // Slideshow Images
                                                        {image : 'assets/images/slides/1.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/1.jpg'},
                                                        {image : 'assets/images/slides/2.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/2.jpg'},  
                                                        {image : 'assets/images/slides/3.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/3.jpg'},
                                                        {image : 'assets/images/slides/4.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/4.jpg'},
                                                        {image : 'assets/images/slides/5.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/5.jpg'}
                                                ],                   
                    // Theme Options               
                    progress_bar            :   1,          // Timer for each slide                         
                    mouse_scrub             :   0 
                });
            });
        </script> 

        <script type="text/javascript" src="assets/js/jquery-1.2.3.min.js"></script>

        <?php include_once("include/footer.php"); ?>

        <span class="trama"></span>

        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

    </body>
</html>


       
