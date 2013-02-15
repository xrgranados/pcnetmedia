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
        <div title="Capa" style="background:url(http://www.equus.com.br/revista11/01.jpg); height:100%;"> 
          
         </div>
        
        <div rel="Na vitrine"> 
        <img src="http://www.equus.com.br/revista11/02.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/03.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/04.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/05.jpg" width="500" height="600">
        </div>
        
        <div rel="Índice" style="background:url(http://www.equus.com.br/revista11/06.jpg); height:100%"> 
        <ul style="font-size:15px; padding:250px 0 0 40px">
        <li><strong>08.</strong> <a href="#" id="custom-link-1">Jeans Perfeito</a></li>
        <li><strong>28.</strong> <a href="#" id="custom-link-2">Making of</a></li>
        <li><strong>30.</strong> <a href="#" id="custom-link-3">Os Eleitos!</a></li>
        <li><strong>32.</strong> <a href="#" id="custom-link-4">Beauty</a></li>
        <li><strong>36.</strong> <a href="#" id="custom-link-5">Meu drink favorito!</a></li>
        <li><strong>38.</strong> <a href="#" id="custom-link-6">Equus Intense</a></li>
        <li><strong>48.</strong> <a href="#" id="custom-link-7">Casual & Chic</a></li>
        <li><strong>56.</strong> <a href="#" id="custom-link-8">Trip Chic: Buenos Aires</a></li>
        <li><strong>64.</strong> <a href="#" id="custom-link-10">Fashion Industry: Ana Hickmann</a></li>
        <li><strong>74.</strong> <a href="#" id="custom-link-12">Trendgirls!</a></li>
        <li><strong>78.</strong> <a href="#" id="custom-link-13">Aposta!</a></li>
        <li><strong>97.</strong> <a href="#" id="custom-link-14">Onde encontrar</a></li>
        </ul>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/07.jpg" width="500" height="600" border="0" usemap="#Map">
        <map name="Map">
          <area shape="rect" coords="25,537,71,583" href="http://www.twitter.com/equusjeanstyle" target="_blank">
          <area shape="rect" coords="74,537,119,585" href="http://www.facebook.com/equusjeanstyle" target="_blank">
          <area shape="rect" coords="120,535,170,586" href="http://www.youtube.com/equusjeanstyle" target="_blank">
          <area shape="rect" coords="169,533,216,587" href="http://statigr.am/equusjeanstyle" target="_blank">
        </map>
        </div>
        
        <div rel="Jeans Perfeito"> 
        <img src="http://www.equus.com.br/revista11/08.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/09.jpg" width="500" height="600">
        </div>
        
        <div title="Jeans Perfeito: Skinny"> 
        <img src="http://www.equus.com.br/revista11/10.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/11.jpg" width="500" height="600">
        </div>
        
        <div title="Jeans Perfeito: Legging"> 
        <img src="http://www.equus.com.br/revista11/12.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/13.jpg" width="500" height="600">
        </div>
        
        <div title="Jeans Perfeito: Cigarrete"> 
        <img src="http://www.equus.com.br/revista11/14.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/15.jpg" width="500" height="600">
        </div>
        
        <div title="Jeans Perfeito: Saruel"> 
        <img src="http://www.equus.com.br/revista11/16.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/17.jpg" width="500" height="600">
        </div>
        
        <div title="Jeans Perfeito: Boot Cut"> 
        <img src="http://www.equus.com.br/revista11/18.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/19.jpg" width="500" height="600">
        </div>
        
        <div title="Jeans Perfeito: Boyfriend"> 
        <img src="http://www.equus.com.br/revista11/20.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/21.jpg" width="500" height="600">
        </div>
        
        <div title="Jeans Perfeito: Slim"> 
        <img src="http://www.equus.com.br/revista11/22.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/23.jpg" width="500" height="600">
        </div>
        
        <div title="Jeans Perfeito: Skinny"> 
        <img src="http://www.equus.com.br/revista11/24.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/25.jpg" width="500" height="600">
        </div>
        
        <div rel="Fidelidade Equus Special"> 
        <a href="http://extrato.cartaofidelidade.com/?id=equus" target="_blank"><img src="http://www.equus.com.br/revista11/26.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="http://extrato.cartaofidelidade.com/?id=equus" target="_blank"><img src="http://www.equus.com.br/revista11/27.jpg" width="500" height="600"></a>
        </div>
        
        <div rel="Making Of"> 
        <img src="http://www.equus.com.br/revista11/28.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/29.jpg); padding:330px 0 40px 28px"> 
        <iframe src="http://player.vimeo.com/video/34213308?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        
        <div rel="Perfumes: Os eleitos!" style="background:url(http://www.equus.com.br/revista11/30.jpg);"> 
        <div id="tag" style="margin:400px 0 160px 30px">
        <span class="preco">R$ 59,90</span><br>
        <span class="ref">88260</span></div>
        <div id="tag" style="margin:200px 0 0 250px">
        <span class="preco">R$ 89,90</span><br>
        <span class="ref">88192</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/31.jpg);"> 
        <div id="tag" style="margin:450px 0 110px 50px">
        <span class="preco">R$ 39,90</span><br>
        <span class="ref">88298</span></div>
        <div id="tag" style="margin:400px 0 0 250px">
        <span class="preco">R$ 59,90</span><br>
        <span class="ref">E81008801</span></div>
        <div class="clear"></div>
        </div>
        
        <div rel="Beauty"> 
        <img src="http://www.equus.com.br/revista11/32.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/33.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/34.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/35.jpg) no-repeat; padding:370px 0 40px 27px"> 
        <iframe src="http://player.vimeo.com/video/25131261?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/36.jpg); padding:330px 0 40px 30px" rel="Meu drink favorito!"> 
        <iframe src="http://player.vimeo.com/video/33716408?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/37.jpg" width="500" height="600">
        </div>
        
        <div rel="Equus Intense"> 
        <img src="http://www.equus.com.br/revista11/38.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/39.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/40.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/41.jpg);"> 
        <div id="tag" style="margin:450px 0 45px 250px">
        <span class="preco">R$ 369,90</span><br>
        <span class="ref">﻿﻿﻿E29563152</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/42.jpg);"> 
        <div id="tag" style="margin:250px 0 45px 250px">
        <span class="preco">Ref.</span><br>
        <span class="ref">﻿﻿﻿E21562106</span></div>
        <div id="tag" style="margin:20px 0 75px 370px">
        <span class="preco">R$ 99,90</span><br>
        <span class="ref">﻿﻿﻿E69568110</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/43.jpg);"> 
        <div id="tag" style="margin:400px 0 100px 250px">
        <span class="preco">Ref.</span><br>
        <span class="ref">﻿﻿﻿E29567203</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/44.jpg);"> 
        <div id="tag" style="margin:250px 0 45px 250px">
        <span class="preco">R$ 209,90</span><br>
        <span class="ref">﻿﻿﻿E51567504</span></div>
        <div id="tag" style="margin:0 0 95px 370px">
        <span class="preco">R$ 139,90</span><br>
        <span class="ref">﻿﻿﻿E05561206</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/45.jpg);"> 
        <div id="tag" style="margin:400px 0 100px 290px">
        <span class="preco">R$ 169,90</span><br>
        <span class="ref">﻿﻿﻿E29563129</span></div>
        <div class="clear"></div>
        </div>

        <div> 
        <a href="../lookbook-equus.php" target="_blank"><img src="http://www.equus.com.br/revista11/46.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="../lookbook-equus.php" target="_blank"><img src="http://www.equus.com.br/revista11/47.jpg" width="500" height="600"></a>
        </div>
        
        <div rel="Casual & Chic"> 
        <img src="http://www.equus.com.br/revista11/48.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/49.jpg);"> 
         <p style="padding:470px 0 20px 405px">
        Jaqueta E49567728<br>
        <strong>R$ 349,90</strong><br>
        Regata E25567224<br>
        <strong>R$ 109,90</strong><br>
        Calça E15562517<br>
        <strong>R$ 209,90</strong><br>
        Lenço E69568017 <br>
        <strong>R$ 69,90</strong><br>
        Scarpin E89564626<br>
        <strong>R$ 239,90</strong></p>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/50.jpg);"> 
         <p style="padding:10px 0 630px 10px">
        Blusa E29567463<br>
        Casaco E49567724<br>
        Shorts E15561405<br>
        <strong>R$ 159,90</strong><br>
        Cinto E69568105 <br>
        <strong>R$ 109,90</strong></p>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/51.jpg);"> 
        <p style="padding:423px 0 60px 60px">
        Cardigan E59567707<br>
        <strong>R$ 169,90</strong><br>
        Camisa E79567327<br>
        <strong>R$ 209,90</strong><br>
        Lenço E69568017<br>
        <strong>R$ 69,90</strong><br>
        Bermuda E19561106 <br>
        <strong>R$ 179,90</strong><br>
        Bolsa E69568203<br>
        <strong>R$ 189,90</strong></p>
        <div class="clear"></div>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/52.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/53.jpg);"> 
        <p style="padding:10px 0 550px 410px">
        Jaqueta ﻿﻿﻿E49567722<br>
        Vestido E25563133<br>
        <strong>R$ 259,90</strong></p>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/54.jpg);"> 
        <p style="padding:60px 0 500px 60px">
        Blusa E25567405<br>
        Cinto E69568109<br>
        <strong>R$ 109,90</strong><br>
        Calça E19562344<br>
        <strong>R$ 269,90</strong></p>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/55.jpg);"> 
        <p style="padding:10px 0 550px 10px">
        Jaqueta E49567725<br>
        Calça ﻿﻿﻿E15562502 <br>
        <strong>R$ 259,90</strong></p>
        </div>
        
        <div rel="Trip Chic: Buenos Aires"> 
        <img src="http://www.equus.com.br/revista11/56.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/57.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/58.jpg);"> 
        <div style="padding:191px 0 40px 285px"><a href="http://www.buenosairesdicas.com" target="_blank">www.buenosairesdicas.com</a></div>
        <iframe src="http://player.vimeo.com/video/35851067?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen style="padding:90px 0 30px 30px"></iframe>
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/59.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/60.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/61.jpg" width="500" height="600">
        </div>
        
        
        <div> 
        <img src="http://www.equus.com.br/revista11/64.jpg" width="500" height="600">
        </div>
        
        <div> 
        <a href="http://mibuenosairesquerido.com/buenosaires1.htm" target="_blank"><img src="http://www.equus.com.br/revista11/65.jpg" width="500" height="600"></a>
        </div>
        
        <div rel="Fashion Industry: Ana Hickmann"> 
        <img src="http://www.equus.com.br/revista11/66.jpg" width="500" height="600">
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/67.jpg);"> 
        <div id="tag" style="margin:450px 0 45px 400px">
        <span class="preco">Ref.</span><br>
        <span class="ref">﻿﻿﻿A21563148</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/68.jpg);"> 
        <div id="tag" style="margin:450px 0 45px 400px">
        <span class="preco">Ref.</span><br>
        <span class="ref">﻿﻿﻿A39563172</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/69.jpg);"> 
        <div id="tag" style="margin:250px 0 250px 270px">
        <span class="preco">Ref.</span><br>
        <span class="ref">﻿﻿﻿A39563170</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/70.jpg); padding:335px 0 40px 33px"> 
        <iframe src="http://player.vimeo.com/video/38049293?title=0&amp;byline=0&amp;portrait=0" width="417" height="235" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/71.jpg);"> 
        <div id="tag" style="margin:150px 0 350px 270px">
        <span class="preco">R$ 419,90</span><br>
        <span class="ref">﻿﻿﻿A15567714</span></div>
        <div id="tag" style="margin:280px 0 350px -190px">
        <span class="preco">Ref.</span><br>
        <span class="ref">﻿﻿﻿A25563150</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/72.jpg);"> 
        <div id="tag" style="margin:100px 0 45px 150px">
        <span class="preco">R$ 179,90</span><br>
        <span class="ref">﻿﻿﻿A21567423</span></div>
        <div id="tag" style="margin:170px 0 75px 290px">
        <span class="preco">R$ 279,90</span><br>
        <span class="ref">﻿﻿﻿A15562550</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/73.jpg);"> 
        <div id="tag" style="margin:350px 0 150px 330px">
        <span class="preco">R$ 269,90</span><br>
        <span class="ref">﻿﻿﻿A29563302</span></div>
        <div class="clear"></div>
        </div>
        
        <div> 
        <a href="../lookbook-ah.php" target="_blank"><img src="http://www.equus.com.br/revista11/74.jpg" width="500" height="600"></a>
        </div>
        
        <div> 
        <a href="../lookbook-ah.php" target="_blank"><img src="http://www.equus.com.br/revista11/75.jpg" width="500" height="600"></a>
        </div>

        
        <div style="background:url(http://www.equus.com.br/revista11/84.jpg);" rel="Trendgirls!"> 
        <div id="tag" style="margin:190px 0 350px 420px">
        <span class="preco">R$ 239,90</span><br>
        <span class="ref">﻿﻿﻿E89564626</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/85.jpg) no-repeat;"> 
        <div id="tag" style="margin:520px 0 350px 260px">
        <span class="preco">R$ 159,90</span><br>
        <span class="ref">﻿﻿﻿E69568108</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/86.jpg);"> 
        <div id="tag" style="margin:520px 0 350px 210px">
        <span class="preco">Ref.</span><br>
        <span class="ref">﻿﻿﻿E69568205</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/87.jpg);"> 
        <div id="tag" style="margin:510px 0 350px 280px">
        <span class="preco">R$ 69,90</span><br>
        <span class="ref">﻿﻿﻿E69568017</span></div>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/88.jpg);" rel="Aposta!"> 
         <p style="padding:475px 0 40px 15px">
        Blusa E25567301<br>
        <strong>R$ 149,90</strong><br>
        Calça E15562013<br>
        <strong>R$ 229,90</strong><br>
        Cinto E69568114<br>
        <strong>R$ 149,90</strong><br>
        Sapato E89564626<br>
        <strong>R$ 239,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/89.jpg);"> 
         <p style="padding:500px 0 40px 10px">
        Jaqueta E09567706<br>
        <strong>R$ 379,90</strong><br>
        Blusa E25567508<br>
        <strong>R$ 129,90</strong><br>
        Calça E15562515<br>
        <strong>R$ 229,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
         <div style="background:url(http://www.equus.com.br/revista11/90.jpg);"> 
         <p style="padding:495px 0 40px 15px">
        Blusa E21567403<br>
        Calça E15562365<br>
        Cinto E69568112<br>
        <strong>R$ 129,90</strong><br>
        Bota E89564625<br>
        <strong>R$ 439,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/91.jpg);"> 
         <p style="padding:510px 0 40px 10px">
        Camisa E79567329<br>
        <strong>R$ 219,90</strong><br>
        Calça E15562524<br>
        <strong>R$ 219,90</strong><br>
        Bolsa E69568208<br>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/92.jpg);"> 
         <p style="padding:505px 0 50px 15px">
        Jaqueta E49567728<br>
        <strong>R$ 349,90</strong><br>
        Blusa E25567503<br>
        Calça E21562106<br>
        <strong>R$ 159,90 </strong>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/93.jpg);"> 
         <p style="padding:520px 0 60px 10px">
        Casaco E49567716<br>
        Regata E29567211<br>
        Calça E15562332<br>
        <strong>R$ 229,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
         <div style="background:url(http://www.equus.com.br/revista11/94.jpg);"> 
         <p style="padding:485px 0 40px 15px">
        Jaqueta E49567702<br>
        <strong>R$ 349,90</strong><br>
        Blusa E25567407<br>
        Calça E15562318<br>
        <strong>R$ 229,90</strong><br>
        Sapato E89564626<br>
        <strong>R$ 239,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/95.jpg);"> 
         <p style="padding:530px 0 40px 10px">
        Casaco E49567732<br>
        Saia E39561208<br>
        <strong>R$ 169,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/96.jpg);"> 
         <p style="padding:530px 0 40px 15px">
        Blusa E25567443<br>
        Saia E05561206<br>
        <strong>R$ 139,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/97.jpg);"> 
         <p style="padding:496px 0 40px 10px">
        Casaco E49567724<br>
        Blusa E29567203<br>
        Shorts E15561405<br>
        <strong>R$ 159,90</strong><br>
        Bota E89564625<br>
        <strong>R$ 439,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/98.jpg);"> 
         <p style="padding:510px 0 40px 15px">
        Camisa E79567322<br>
        Colete E15567618<br>
        Calça E15562358<br>
        <strong>R$ 229,90</strong><br>
        Bolsa E69568205<br>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/99.jpg);"> 
         <p style="padding:550px 0 40px 10px">
        Vestido E29563127<br>
        <strong>R$ 229,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/100.jpg);"> 
         <p style="padding:500px 0 40px 15px">
        Casaco E29567703<br>
        <strong>R$ 209,90</strong><br>
        Regata E21567217<br>
        <strong>R$ 89,90 </strong><br>
        Calça E15762336<br>
        <strong>R$ 229,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/101.jpg);"> 
         <p style="padding:480px 0 40px 10px">
        Colete E49567605<br>
        <strong>R$ 289,90</strong><br>
        Blusa E25567433<br>
        <strong>R$ 119,90</strong><br>
        Calça E15562017<br>
        <strong>R$ 229,90</strong><br>
        Cinto E69568114<br>
        <strong>R$ 139,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/102.jpg);"> 
         <p style="padding:503px 0 40px 15px">
        Camisa E79567345<br>
        Blazer E49567731<br>
        <strong>R$ 279,90</strong><br>
        Saia E15561204<br>
        <strong>R$ 189,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/103.jpg);"> 
         <p style="padding:470px 0 40px 10px">
        Blusa E21567532<br>
        <strong>R$ 119,90</strong><br>
        Shorts E15561105<br>
        <strong>R$ 179,90 </strong><br>
        Cinto E69568111<br>
        <strong>R$ 149,90</strong><br>
        Bota E89564625<br>
        <strong>R$ 439,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/104.jpg);"> 
         <p style="padding:520px 0 40px 15px">
        Cardigan E51567701<br>
        <strong>R$ 169,90</strong><br>
        Camisa E79567345<br>
        Calça E05562552<br>
        <strong>R$ 169,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
       <div style="background:url(http://www.equus.com.br/revista11/105.jpg);"> 
         <p style="padding:555px 0 40px 10px">
        Vestido E21563108<br>
        <strong>R$ 189,90</strong>
        </p>
        <div class="clear"></div>
        </div>
        
        <div style="background:url(http://www.equus.com.br/revista11/106.jpg);"> 
         <p style="padding:520px 0 40px 15px">
        Jaqueta E15567701<br>
        <strong>R$ 299,90</strong><br>
        Vestido E29563104<br>
        <strong>R$ 299,90</strong><br>
        Bolsa E69568203<br>
        </p>
        <div class="clear"></div>
        </div>
        
        <div rel="Onde encontrar"> 
        <img src="http://www.equus.com.br/revista11/107.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/108.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/109.jpg" width="500" height="600">
        </div>
        
        <div> 
        <img src="http://www.equus.com.br/revista11/110.jpg" width="500" height="600" border="0" usemap="#Map2">
        <map name="Map2">
          <area shape="rect" coords="174,550,330,587" href="http://www.equus.com.br">
          <area shape="rect" coords="24,460,473,529" href="mailto:revista@equus.com.br">
        </map>
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
    $('#mybook').booklet(28); //go to page 6
});
$('#custom-link-3').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(30); //go to page 6
});
$('#custom-link-4').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(32); //go to page 6
});
$('#custom-link-5').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(36); //go to page 6
});
$('#custom-link-6').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(38); //go to page 6
});
$('#custom-link-7').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(48); //go to page 6
});
$('#custom-link-8').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(56); //go to page 6
});
$('#custom-link-9').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(60); //go to page 6
});
$('#custom-link-10').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(64); //go to page 6
});
$('#custom-link-11').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(76); //go to page 6
});
$('#custom-link-12').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(74); //go to page 6
});
$('#custom-link-13').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(78); //go to page 6
});
$('#custom-link-14').click(function(e){
    e.preventDefault();
    $('#mybook').booklet(97); //go to page 6
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
                          <a href="http://www.equus.com.br/revista9/" target="_blank"><img src="assets/revista/thumb/2012-jun.jpg" width="120" height="144" alt="Septiembre 2011" /></a>
                          <p>Junio/2012</p>
                        </div>
                        <div class="col">
                          <a href="http://www.equus.com.br/revista8/" target="_blank"><img src="assets/revista/thumb/2012-mar.jpg" width="120" height="144" alt="Junio 2011" /></a>
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


       
