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
        <div title="Capa" style="background:url(http://www.equus.com.br/revista13/01.jpg); height:100%;"> 
       
        </div>
        
        <div rel="Na vitrine"> 
        <img src="http://www.equus.com.br/revista13/02.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/03.jpg" width="500" height="600">
        </div>
        
       <div rel="Índice" style="background:url(http://www.equus.com.br/revista13/04.jpg); height:100%"> 
        <ul style="font-size:15px; padding:240px 0 0 40px">
        <li><a href="#" id="custom-link-1">1. Moda Solidária</a></li>
        <li><a href="#" id="custom-link-2">2. Making of</a></li>
        <li><a href="#" id="custom-link-3">3. Equus Special</a></li>
        <li><a href="#" id="custom-link-4">4. Ana Hickmann Equus</a></li>
        <li><a href="#" id="custom-link-5">5. Rastreamento Cult Fashion</a></li>
        <li><a href="#" id="custom-link-6">6. News: Olhar Armado</a></li>
        <li><a href="#" id="custom-link-7">7. Moda Equus: Maré Alta!</a></li>
        <li><a href="#" id="custom-link-8">8. Trip Chic</a></li>
        <li><a href="#" id="custom-link-9">9. Equus Verão 2013</a></li>
        <li><a href="#" id="custom-link-11">10. Perfil em Foco</a></li>
        <li><a href="#" id="custom-link-12">11. Moda Equus: Os vestidos mais desejados</a></li>
        <li><a href="#" id="custom-link-13">12. Jeans que nós amamos</a></li>
        <li><a href="#" id="custom-link-14">13. Beleza</a></li>
        <li><a href="#" id="custom-link-15">14. Equus Menu</a></li>
        <li><a href="#" id="custom-link-16">15. Onde Encontrar</a></li>
        </ul>
        </div>>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/05.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista13/06.jpg); padding:330px 0 40px 28px" rel="Moda Solidária"> <iframe src="http://player.vimeo.com/video/48829352?color=ff0179" width="417" height="234" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
        </div>
        
        <div> 
        <a href="http://www.equus.com.br/happyfashionday" target="_blank"><img src="http://www.equus.com.br/revista13/07.jpg" width="500" height="600" border="0"></a>
        </div>
        
        <div> 
        <a href="http://www.equus.com.br/happyfashionday" target="_blank"><img src="http://www.equus.com.br/revista13/08.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="http://www.equus.com.br/happyfashionday" target="_blank"><img src="http://www.equus.com.br/revista13/09.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/10.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/11.jpg" width="500" height="600">
        </div>
        
        <div rel="Making of"> 
        <img src="http://www.equus.com.br/revista13/12.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/13.jpg" width="500" height="600">
        </div>
        
        <div rel="Equus Special"> 
        <a href="http://www.equus.com.br/fidelidade/varejo.php" target="_blank"><img src="http://www.equus.com.br/revista13/14.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="http://www.equus.com.br/fidelidade/varejo.php" target="_blank"><img src="http://www.equus.com.br/revista13/15.jpg" width="500" height="600"></a>
        </div>
        
        <div rel="Ana Hickmann Equus"> 
        <img src="http://www.equus.com.br/revista13/16.jpg" width="500" height="600">
        </div>
       
        
        <div> 
        <img src="http://www.equus.com.br/revista13/17.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/18.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/19.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/20.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/21.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/22.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/23.jpg" width="500" height="600">
        </div>
        
        <div> 
        <a href="http://www.facebook.com/equusjeanstyle" target="_blank"><img src="http://www.equus.com.br/revista13/24.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="http://www.facebook.com/equusjeanstyle" target="_blank"><img src="http://www.equus.com.br/revista13/25.jpg" width="500" height="600"></a>
        </div>
        
        <div rel="Rastreamento Cult Fashion"> 
        <img src="http://www.equus.com.br/revista13/26.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/27.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/28.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/29.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/30.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista13/31.jpg); padding:330px 0 40px 28px"> <iframe width="417" height="235" src="http://www.youtube.com/embed/2D6kEPC-B_8" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/32.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/33.jpg" width="500" height="600">
        </div>
        
        <div rel="News: Olhar Armado"> 
        <img src="http://www.equus.com.br/revista13/34.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/35.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/36.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/37.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/38.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/39.jpg" width="500" height="600">
        </div>
        
        <div> 
        <a href="http://statigr.am/equusjeanstyle" target="_blank"><img src="http://www.equus.com.br/revista13/40.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="http://statigr.am/equusjeanstyle" target="_blank"><img src="http://www.equus.com.br/revista13/41.jpg" width="500" height="600"></a>
        </div>
        
        <div rel="Moda Equus: Maré Alta!"> 
        <img src="http://www.equus.com.br/revista13/42.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/43.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/44.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/45.jpg" width="500" height="600">
        </div>

        <div> 
        <img src="http://www.equus.com.br/revista13/46.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/47.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/48.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/49.jpg" width="500" height="600">
        </div>
        
        <div rel="Trip Chic"> 
        <img src="http://www.equus.com.br/revista13/50.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/51.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/52.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/53.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/54.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/55.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/56.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/57.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/58.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/59.jpg" width="500" height="600">
        </div>
        
        <div> 
        <a href="http://www.pinterest.com/equusjeanstyle" target="_blank"><img src="http://www.equus.com.br/revista13/60.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="http://www.pinterest.com/equusjeanstyle" target="_blank"><img src="http://www.equus.com.br/revista13/61.jpg" width="500" height="600"></a>
        </div>
        
        <div rel="Equus Verão 2013"> 
        <img src="http://www.equus.com.br/revista13/62.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/63.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/64.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/65.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/66.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/67.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/68.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/69.jpg" width="500" height="600">
        </div>
        
        <div rel="Perfil em Foco"> 
        <img src="http://www.equus.com.br/revista13/70.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/71.jpg" width="500" height="600">
        </div>
        
        <div rel="Moda Equus: Os vestidos mais desejados"> 
        <img src="http://www.equus.com.br/revista13/72.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/73.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/74.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/75.jpg" width="500" height="600">
        </div>

        <div> 
        <img src="http://www.equus.com.br/revista13/76.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/77.jpg" width="500" height="600">
        </div>
        
        <div rel="Jeans que nós amamos"> 
        <img src="http://www.equus.com.br/revista13/78.jpg" width="500" height="600"> </div>
        
        <div style="background:url(79.jpg); padding:170px 0 440px 0"> <iframe src="http://player.vimeo.com/video/49783653" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>  </div>
        
        <div rel="Beleza"> 
        <img src="http://www.equus.com.br/revista13/80.jpg" width="500" height="600">
        </div>
        
       <div> 
        <img src="http://www.equus.com.br/revista13/81.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/82.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/83.jpg" width="500" height="600">
        </div>
        
        <div rel="Equus Menu"> 
        <img src="http://www.equus.com.br/revista13/84.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/85.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/86.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/87.jpg" width="500" height="600">
        </div>
        
        <div rel="Onde Encontrar"> 
        <a href="http://www.equus.com.br/lojas" target="_blank"><img src="http://www.equus.com.br/revista13/88.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="http://www.equus.com.br/lojas" target="_blank"><img src="http://www.equus.com.br/revista13/89.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista13/90.jpg" width="500" height="600">
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
    $('#mybook').booklet(12); //go to page 6
});
$('#custom-link-3').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(14); //go to page 6
});
$('#custom-link-4').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(16); //go to page 6
});
$('#custom-link-5').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(26); //go to page 6
});
$('#custom-link-6').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(34); //go to page 6
});
$('#custom-link-7').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(42); //go to page 6
});
$('#custom-link-8').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(50); //go to page 6
});
$('#custom-link-9').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(62); //go to page 6
});
$('#custom-link-11').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(70); //go to page 6
});
$('#custom-link-12').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(72); //go to page 6
});
$('#custom-link-13').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(78); //go to page 6
});
$('#custom-link-14').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(80); //go to page 6
});
$('#custom-link-15').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(84); //go to page 6
});
$('#custom-link-16').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(88); //go to page 6
});
              });

        </script>
        
<script type="text/javascript">
swfobject.registerObject("FlashID");
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
                          <a href="revista13.php"><img src="assets/revista/thumb/2012-set.jpg" width="120" height="144" alt="Diciembre 2011" /></a>
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


       
