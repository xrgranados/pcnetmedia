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
        <div title="Capa" style="background:url(http://www.equus.com.br/revista12/01.jpg); height:100%;"> 
       
        </div>
        
        <div rel="Na vitrine"> 
        <img src="http://www.equus.com.br/revista12/02.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/03.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/04.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/05.jpg" width="500" height="600">
        </div>
        
        <div rel="Índice" style="background:url(http://www.equus.com.br/revista12/06.jpg); height:100%"> 
        <ul style="font-size:15px; padding:270px 0 0 40px">
        <li><a href="#" id="custom-link-1">Equus Special</a></li>
        <li><a href="#" id="custom-link-2">Ana Hickmann Equus</a></li>
        <li><a href="#" id="custom-link-3">Trip Chic</a></li>
        <li><a href="#" id="custom-link-4">Closet Equus</a></li>
        <li><a href="#" id="custom-link-5">Rastreamento Cult Fashion</a></li>
        <li><a href="#" id="custom-link-6">Peça-chave</a></li>
        <li><a href="#" id="custom-link-7">Moda Equus</a></li>
        <li><a href="#" id="custom-link-8">Beleza</a></li>
        <li><a href="#" id="custom-link-9">Perfil</a></li>
        <li><a href="#" id="custom-link-11">News</a></li>
        <li><a href="#" id="custom-link-12">Onde encontrar</a></li>
        </ul>
        </div>
        
        <div> 
        <img src="07.jpg" width="500" height="600" border="0" usemap="#Map">
        <map name="Map">
          <area shape="rect" coords="25,537,71,583" href="http://www.twitter.com/equusjeanstyle" target="_blank">
          <area shape="rect" coords="74,537,119,585" href="http://www.facebook.com/equusjeanstyle" target="_blank">
          <area shape="rect" coords="120,535,170,586" href="http://www.youtube.com/equusjeanstyle" target="_blank">
          <area shape="rect" coords="169,533,216,587" href="http://statigr.am/equusjeanstyle" target="_blank">
        </map>
        </div>
        
        <div rel="Equus Special"> 
        <img src="08.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="09.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="10.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="11.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(12.jpg); padding:330px 0 40px 28px"> <iframe src="http://player.vimeo.com/video/44655350?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        

        <div> 
        <a href="http://www.equus.com.br/fidelidade" target="_blank"><img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/13.jpg" width="500" height="600"></a> </div>
        
        <div> 
        <a href="http://www.facebook.com/equusjeanstyle" target="_blank"><img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/14.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="http://www.facebook.com/equusjeanstyle" target="_blank"><img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/15.jpg" width="500" height="600"></a>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/16.jpg); padding:330px 0 40px 28px" rel="Ana Hickmann Equus"> <iframe src="http://player.vimeo.com/video/26028186?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
       
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/17.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/18.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/19.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/20.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/21.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/22.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/23.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/24.jpg); padding:330px 0 40px 28px" rel="Trip Chic"> <iframe src="http://player.vimeo.com/video/44260541?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
       
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/25.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/26.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/27.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/28.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/29.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/30.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/31.jpg" width="500" height="600">
        </div>
        
        <div rel="Closet Equus"> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/32.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/33.jpg" width="500" height="600">
        </div>
        
        <div rel="Rastreamento Cult Fashion"> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/34.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/35.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/36.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/37.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/38.jpg); padding:330px 0 40px 28px"> <iframe width="417" height="235" src="http://www.youtube.com/embed/4CXBGHIqyEg?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/39.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/40.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/41.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/42.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/43.jpg" width="500" height="600">
        </div>
        
        <div rel="Peça-chave"> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/44.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/45.jpg" width="500" height="600">
        </div>

        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/46.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/47.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/48.jpg); padding:330px 0 40px 28px" rel="Moda Equus"> <iframe src="http://player.vimeo.com/video/34539306?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/49.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/50.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/51.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/52.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/53.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/54.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/55.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/56.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/57.jpg" width="500" height="600">
        </div>
        
        <div rel="Beleza"> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/58.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/59.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/http://www.equus.com.br/revista12/60.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/61.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/62.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/63.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista12/64.jpg); padding:410px 0 40px 28px" rel="Perfil">  <iframe width="100%" height="166" scrolling="no" frameborder="no" src="http://w.soundcloud.com/player/?url=http%3A%2F%2Fapi.soundcloud.com%2Ftracks%2F50416205&show_artwork=true"></iframe>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/65.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/66.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/67.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/68.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/69.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/70.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/71.jpg" width="500" height="600">
        </div>
        
        <div rel="News"> 
        <img src="http://www.equus.com.br/revista12/72.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/73.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/74.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/75.jpg" width="500" height="600">
        </div>

        <div> 
        <img src="http://www.equus.com.br/revista12/76.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/77.jpg" width="500" height="600">
        </div>
        
        <div> 
        <a href="http://www.equus.com.br/blog/?p=4337" target="_blank"><img src="http://www.equus.com.br/revista12/78.jpg" width="500" height="600"></a> </div>
        
        <div> 
        <a href="http://www.equus.com.br/blog/?p=4337" target="_blank"><img src="http://www.equus.com.br/revista12/79.jpg" width="500" height="600"></a> </div>
        
        <div rel="Onde encontrar"> 
        <img src="http://www.equus.com.br/revista12/80.jpg" width="500" height="600">
        </div>
        
       <div> 
        <img src="http://www.equus.com.br/revista12/81.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista12/82.jpg" width="500" height="600">
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
    $('#mybook').booklet(8); //go to page 6
});
$('#custom-link-2').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(16); //go to page 6
});
$('#custom-link-3').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(24); //go to page 6
});
$('#custom-link-4').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(32); //go to page 6
});
$('#custom-link-5').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(34); //go to page 6
});
$('#custom-link-6').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(44); //go to page 6
});
$('#custom-link-7').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(48); //go to page 6
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
    $('#mybook').booklet(72); //go to page 6
});
$('#custom-link-12').click(function(e){
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


       
