<!DOCTYPE html>
<html lang="es-gt">
    <head>

        <title>EQUUS Guatemala</title>
        <?php include_once("include/head_metas.php"); ?>
        <link href="assets/revista/revista.css" rel="stylesheet" type="text/css" />
        <link href="assets/revista/interna-revista.css" rel="stylesheet" type="text/css" />
        <link href="assets/revista/jquery.booklet.1.2.0.css" type="text/css" rel="stylesheet" media="screen" />
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

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="assets/js/slider.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js" type="text/javascript"></script>
        <script src="assets/revista/jquery.easing.1.3.js" type="text/javascript"></script>
        <script src="assets/revista/jquery.booklet.1.2.0.min.js" type="text/javascript"></script>

        
         <style type="text/css">

            .menu li.active4 {
                background: url('assets/img/menu_bg.png') repeat; 
                -webkit-border-radius: 0px 0px 7px 7px;
                   -moz-border-radius: 0px 0px 7px 7px;
                        border-radius: 0px 0px 7px 7px;
                -webkit-box-shadow: 0px 0px 15px #000000;
                   -moz-box-shadow: 0px 0px 15px #000000;
                        box-shadow: 0px 0px 15px #000000;
                opacity: 1;
            }
            .menu li.active4 > a {
                color: black; 
            }

        </style>

    </head>
    <body id="interna-revista">
        
        <!-- Header -->
        <?php include_once("include/header.php"); ?>

        <!-- Arrow Navigation 
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a> -->
    
        <!-- Time Bar  
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div> -->

           
        
            <div class="book_wrapper">
                <a id="next_page_button"></a>
                <a id="prev_page_button"></a>
                <div id="custom-menu" class="b-menu"><img src="assets/img/navegue.png" width="200" height="24" alt="Navegue por aqui" style="border-radius: 12px;"></div>
                <div class="clear"></div>
                    
            <div id="mybook">
            <div class="b-load">
                <div title="Capa"> 
                <img src="assets/images/revista/14-0.jpg" width="500" height="600">
                </div>
                
                <div rel="Na vitrine"> 
                <img src="assets/images/revista/14-1.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-2.jpg" width="500" height="600">
                </div>
                
                <div rel="Índice" id="indice" style="background:url(assets/images/revista/14-3.jpg); height:100%"> 
                    <ul style="font-size:15px; padding:240px 0 0 40px">
                        <li><a href="#" id="custom-link-1">1. Moda Solidária</a></li>
                        <li><a href="#" id="custom-link-2">2. Alto Verão</a></li>
                        <li><a href="#" id="custom-link-3">3. Equus Special</a></li>
                        <li><a href="#" id="custom-link-4">4. Moda Equus</a></li>
                        <li><a href="#" id="custom-link-5">5. Rastreamento Cult Fashion</a></li>
                        <li><a href="#" id="custom-link-6">6. Perfil em Foco: Mariana Hein</a></li>
                        <li><a href="#" id="custom-link-7">7. Ana Hickmann Equus</a></li>
                        <li><a href="#" id="custom-link-8">8. Trip Chic</a></li>
                        <li><a href="#" id="custom-link-9">9. Beleza</a></li>
                        <li><a href="#" id="custom-link-11">10. Previsão Fashion</a></li>
                        <li><a href="#" id="custom-link-12">11. Equus Menu</a></li>
                        <li><a href="#" id="custom-link-13">15. Onde Encontrar</a></li>
                    </ul>
                </div>
                
                <div> 
                <img src="assets/images/revista/14-4.jpg" width="500" height="600">
                </div>
                
                <div rel="Moda Solidária"> 
                <a href="http://www.bancodealimentos.org.br" target="_blank"><img src="assets/images/revista/14-5.jpg" width="500" height="600"></a>
                </div>
                
                <div> 
                <a href="http://www.bancodealimentos.org.br" target="_blank"><img src="assets/images/revista/14-6.jpg" width="500" height="600"></a>
                </div>
                
                <div rel="Alto Verão"> 
                <a href="http://www.equus.com.br/altoverao" target="_blank"><img src="assets/images/revista/14-7.jpg" width="500" height="600"></a>
                </div>
                
                <div> 
                <a href="http://www.equus.com.br/altoverao" target="_blank"><img src="assets/images/revista/14-8.jpg" width="500" height="600"></a>
                </div>
                
                <div rel="Equus Special"> 
                <a href="http://www.equus.com.br/fidelidade/" target="_blank"><img src="assets/images/revista/14-9.jpg" width="500" height="600"></a>
                </div>
                
                <div> 
                <a href="http://www.equus.com.br/fidelidade/" target="_blank"><img src="assets/images/revista/14-10.jpg" width="500" height="600"></a>
                </div>
                
                <div rel="Moda Equus"> 
                <img src="assets/images/revista/14-11.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-12.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-13.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-14.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-15.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-16.jpg" width="500" height="600">
                </div>
               
                
                <div> 
                <img src="assets/images/revista/14-17.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-18.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-19.jpg" width="500" height="600">
                </div>
                
               <div> 
                <img src="assets/images/revista/14-20.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-21.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-22.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-23.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-24.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-25.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-26.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-27.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-28.jpg" width="500" height="600">
                </div>
                
                <div> 
                <a href="http://www.facebook.com/equusjeanstyle" target="_blank"><img src="assets/images/revista/14-29.jpg" width="500" height="600"></a>
                </div>
                
                <div> 
                <a href="http://www.facebook.com/equusjeanstyle" target="_blank"><img src="assets/images/revista/14-30.jpg" width="500" height="600"></a>
                </div>
                
                <div rel="Rastreamento Cult-Fashion"> 
                <img src="assets/images/revista/14-31.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-32.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-33.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-34.jpg" width="500" height="600">
                </div>
                
                <div style="background:url(assets/images/revista/14-35.jpg); padding:320px 0 440px 0"> <iframe width="500" height="281" src="http://www.youtube.com/embed/R_SIB4xLAzY" frameborder="0" allowfullscreen></iframe> </div>
                
                <div> 
                <img src="assets/images/revista/14-36.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-37.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-38.jpg" width="500" height="600">
                </div>
                
                 <div> 
                <a href="http://on.fb.me/SxgaNm" target="_blank"><img src="assets/images/revista/concurso1.jpg" width="500" height="600"></a>
                </div>
                
                <div> 
                <a href="http://on.fb.me/SxgaNm" target="_blank"><img src="assets/images/revista/concurso2.jpg" width="500" height="600"></a>
                </div>
                
                <div rel="Perfil em Foco"> 
                <img src="assets/images/revista/14-39.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-40.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-41.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-42.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-43.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-44.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-45.jpg" width="500" height="600">
                </div>

                <div> 
                <a href="http://www.instagram.com/equusjeanstyle" target="_blank"><img src="assets/images/revista/14-46.jpg" width="500" height="600"></a>
                </div>
                
                <div rel="Ana Hickmann Equus"> 
                <img src="assets/images/revista/14-47.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-48.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-49.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-50.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-51.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-52.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-53.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-54.jpg" width="500" height="600">
                </div>
                
                <div rel="Trip Chic"> 
                <img src="assets/images/revista/14-55.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-56.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-57.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-58.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-59.jpg" width="500" height="600">
                </div>
                
                <div> 
                <a href="http://www.pinterest.com/equusjeanstyle" target="_blank"><img src="assets/images/revista/14-60.jpg" width="500" height="600"></a>
                </div>
                
                <div rel="Beleza"> 
                <img src="assets/images/revista/14-61.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-62.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-63.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-64.jpg" width="500" height="600">
                </div>
                
                <div  rel="Previsão Fashion"> 
                <img src="assets/images/revista/14-65.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-66.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-67.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-68.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-69.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-70.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-71.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-72.jpg" width="500" height="600">
                </div>
                
                <div rel="Equus Menu"> 
                <img src="assets/images/revista/14-73.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-74.jpg" width="500" height="600">
                </div>
                
                <div> 
                <img src="assets/images/revista/14-75.jpg" width="500" height="600">
                </div>

                <div> 
                <img src="assets/images/revista/14-76.jpg" width="500" height="600">
                </div>
                
                <div rel="Onde Encontrar"> 
                <a href="http://www.equus.com.br/lojas" target="_blank"><img src="assets/images/revista/14-77.jpg" width="500" height="600"></a>
                </div>
                
                <div> 
                <a href="http://www.equus.com.br/lojas" target="_blank"><img src="assets/images/revista/14-78.jpg" width="500" height="600"></a>
                </div>
                
                <div> 
                <img src="assets/images/revista/14-79.jpg" width="500" height="600">
                </div>
                
            </div>
        </div>

        </div>
        
        <!-- The JavaScript -->

        <script type="text/javascript">
                              $(function() {
                          $('#mybook').booklet({
            width:  1000,
            height: 600,
            menu: '#custom-menu',
            chapterSelector: true,
            arrows: true,
            arrowsHide: false,
            pageNumbers: false,
            closed: true,
            autoCenter: true,
            pagePadding: 0,
            menu: '#custom-menu',
        });
        $('#custom-link-1').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(6); //go to page 6
        });
        $('#custom-link-2').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(8); //go to page 6
        });
        $('#custom-link-3').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(10); //go to page 6
        });
        $('#custom-link-4').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(12); //go to page 6
        });
        $('#custom-link-5').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(32); //go to page 6
        });
        $('#custom-link-6').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(42); //go to page 6
        });
        $('#custom-link-7').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(50); //go to page 6
        });
        $('#custom-link-8').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(58); //go to page 6
        });
        $('#custom-link-9').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(64); //go to page 6
        });

        $('#custom-link-11').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(68); //go to page 6
        });
        $('#custom-link-12').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(76); //go to page 6
        });
        $('#custom-link-13').click(function(e){
            e.preventDefault();
            $('#mybook').booklet(80); //go to page 6
        });
                      });

        </script>


        <div class="clear"></div>

        <div class="revista">
  
       

        <div id="lookbook">

            <div id="container-lookbook">
                <h2>Nuestras Ediciones</h2> <br>
                <div class="sliderbutton" id="slideleft" onclick="slideshow.move(-1)"></div>
                <div id="slider">
                    <ul>
                      <li>

                        <div class="col">
                          <a href="revista.php"><img src="assets/revista/thumb/2012-nov.jpg" width="120" height="144" alt="Marzo 2012" /></a>
                          <p>Diciembre/2012</p>
                        </div>
                        <div class="col">
                          <a href="revista13.php" ><img src="assets/revista/thumb/2012-set.jpg" width="120" height="144" alt="Diciembre 2011" /></a>
                          <p>Septiembre/2012</p>
                        </div>
                    
                      </li> 
                      <li>

                        <div class="col">
                          <a href="revista12.php"><img src="assets/revista/thumb/2012-jun.jpg" width="120" height="144" alt="Septiembre 2011" /></a>
                          <p>Junio/2012</p>
                        </div>
                        <div class="col">
                          <a href="revista11.php"><img src="assets/revista/thumb/2012-mar.jpg" width="120" height="144" alt="Junio 2011" /></a>
                          <p>Marzo/2012</p>
                        </div>

                      </li>                 
                  </ul>

                </div>
                <div class="sliderbutton" id="slideright" onclick="slideshow.move(1)"></div>
                <ul id="pagination" class="pagination">
                    <li onclick="slideshow.pos(0)">01</li>
                    <li onclick="slideshow.pos(1)">02</li>
              </ul>
              <div class="clear"></div>
            </div>

        </div>
        </div>
        <script type="text/javascript">
         var slideshow=new TINY.slider.slide('slideshow',{
              id:'slider',
              auto:4,
              resume:false,
              vertical:false,
              navid:'pagination',
              activeclass:'current',
              position:0,
              rewind:false,
              elastic:true,
              left:'slideleft',
              right:'slideright',
              shadows: true
          });
        </script>

        <div class="clear"></div>

        <span class="trama"></span>

        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-1.8.0.min.js"><\/script>')</script>

    </body>
</html>


       
