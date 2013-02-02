<!DOCTYPE html>
<html lang="es-gt">
    <head>

        <title>EQUUS Guatemala</title>
        <?php include_once("include/head_metas.php"); ?>
            <!-- Maps -->

     <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>

       <script>
          function initialize() {
            var mapOptions = {
              zoom: 11,
              center: new google.maps.LatLng(14.581922,-90.508118),
              mapTypeId: google.maps.MapTypeId.ROADMAP
            }
            var map = new google.maps.Map(document.getElementById('map_canvas'),
                                          mapOptions);

            setMarkers(map, tiendas);
      }

      /**
       * Data for the markers consisting of a name, a LatLng and a zIndex for
       * the order in which these markers should display on top of each
       * other.
       */
      var tiendas = [
        ['EQUUS Miraflores', 14.621000,-90.553000, 2],
        ['EQUUS Pradera Concepcion', 14.552328,-90.453427, 1],
      ];

      function setMarkers(map, locations) {
        // Add markers to the map

        // Marker sizes are expressed as a Size of X,Y
        // where the origin of the image (0,0) is located
        // in the top left of the image.

        // Origins, anchor positions and coordinates of the marker
        // increase in the X direction to the right and in
        // the Y direction down.
        var image = new google.maps.MarkerImage('assets/img/logoweb.png',
            // This marker is 20 pixels wide by 32 pixels tall.
            new google.maps.Size(100, 100),
            // The origin for this image is 0,0.
            new google.maps.Point(0,0),
            // The anchor for this image is the base of the flagpole at 0,32.
            new google.maps.Point(0, 32));
        
        var shape = {
            coord: [1, 1, 1, 20, 18, 20, 18 , 1],
            type: 'poly'
        };
        for (var i = 0; i < locations.length; i++) {
          var beach = locations[i];
          var myLatLng = new google.maps.LatLng(beach[1], beach[2]);
          var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              icon: image,
              shape: shape,
              title: beach[0],
              zIndex: beach[3]
          });
        }
      }
    </script>
        <link rel="stylesheet" type="text/css" href="assets/css/style1.css" />
        <style type="text/css">

            .menu li.active2 {
                background: url('assets/img/menu_bg.png') repeat; 
                -webkit-border-radius: 0px 0px 7px 7px;
                   -moz-border-radius: 0px 0px 7px 7px;
                        border-radius: 0px 0px 7px 7px;
                -webkit-box-shadow: 0px 0px 15px #000000;
                   -moz-box-shadow: 0px 0px 15px #000000;
                        box-shadow: 0px 0px 15px #000000;
                opacity: 0.85;
            }
            .menu li.active2 > a {
                color: black; 
            }

            #map_canvas {
              float: right;
              margin-top: -340px;
              margin-right: 25px;
              width: 45%;
              height: 325px;
              border:double 4px #fff;
              -webkit-border-radius: 4px;
                 -moz-border-radius: 4px;
                      border-radius: 4px;   
            }

        </style>

    </head>
    <body onload="initialize()">
        
        <!-- Header -->
        <?php include_once("include/header.php"); ?>

        <!--Arrow Navigation 
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>-->
    
        <!-- Time Bar  -->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>

        <div class="container">
            <section class="cn-container">
            <div class="cn-slide cn-init" id="slide-main">
                <nav>
                    <a href="#slide-1" class="navi">Quienes Somos</a>                           
                    <a href="#slide-2" class="navi">EQUUS Guatemala</a>
                    <a href="#slide-3" class="navi">tiendas</a>                      
                </nav>
            </div>
                
            <!-- Slide 1 and Sub-slides -->
            <div class="cn-slide cn-slide-sub" id="slide-1">
                <h2>Quienes Somos</h2>
                <a href="#slide-main" class="cn-back">Back</a>
                <div class="cn-content">
                    <hr class="bar">
                        <p>EQUUS JEANSTYLE fue fundada en 1976. En el transcurso de estos años de progreso continuo, 
                            siempre buscaba la satisfacción de sus clientes, desarrollando su propio estilo de confección 
                            que combina calidad, creatividad y buen gusto. <br> <br>

                            Desde la recepción de primas de la tela, a través de todas las etapas del proceso de producción, 
                            la creación, modelaje, corte, lavado y acabado, EQUUS JEANSTYLE ofrece un producto que monitorea 
                            las tendencias del mercado y la moda es diferente, única, cómoda y exquisita mano de obra. <br> <br>

                            Regularmente el equipo de estilo viaja a los principales centros de la moda en el extranjero, 
                            revisando las últimas novedades del arte de vestir, para ofrecer a sus consumidores, además de la 
                            calidad, la satisfacción de sentirse bien usando EQUUS.</p>
                </div>
            </div>
                
                
            <!-- Slide 2 and Sub-slides -->
            <div class="cn-slide cn-slide-sub" id="slide-2">
                <h2>EQUUS Guatemala</h2>
                <a href="#slide-main" class="cn-back">Back</a>
                <div class="cn-content">
                    <hr class="bar">
                        <p>
                            
                        </p>
                </div>
            </div>
              
            <!-- Slide 3 and Sub-slides -->

            <div class="cn-slide cn-init cn-slide-sub" id="slide-3">
                    <h2>Tiendas</h2>
                    <a href="#slide-main" class="cn-back">Back</a>
                    <nav>
                        <a href="#slide-3-1" class="navi">Guatemala</a>                           
                        <a href="#slide-3-2" class="navi">Brasil</a>
                    </nav>
            </div>

            <div class="cn-slide cn-slide-sub" id="slide-3-1">
                <h2>EQUUS Guatemala</h2>
                <a href="#slide-3" class="cn-back">Back</a>
                <div class="cn-content">
                    <hr class="bar">
                        <p>
                            <strong>PRADERA CONCEPCIÓN</strong> <br> 
                            C.C. Pradera Concepción, L. 138 <br>
                            Km. 15.5 Carretera a El Salvador <br>
                            Finca Condado Concepción <br>
                            Tel: (502) 6637-1012 & 6637-1010 <br>
                            <a href="mailto:pradera@equus.gt">pradera@equus.gt</a> <br><br><br>
                            <strong>MIRAFLORES</strong> <br>
                            C.C. Miraflores, L. 166 <br>
                            21 avenida 4-32 zona 11 <br>
                            Tel: (502) 2474-8308 & 2474 2557 <br>
                            <a href="mailto:miraflores@equus.gt">miraflores@equus.gt</a>
                            <br>
                            <br> 
                        </p>
                        <div id="map_canvas"></div>
                </div>
            </div>

            <div class="cn-slide cn-slide-sub" id="slide-3-2">
                <h2>EQUUS Brasil</h2>
                <a href="#slide-3" class="cn-back">Back</a>
                <div class="cn-content">
                    <hr class="bar">
                        <p>
                            
                        </p>
                </div>
            </div>
        
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
                                                        {image : 'assets/images/slides/tiendas1.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/1.jpg'},
                                                        {image : 'assets/images/slides/tiendas2.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/2.jpg'},  
                                                        {image : 'assets/images/slides/tiendas3.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/3.jpg'},
                                                        {image : 'assets/images/slides/tiendas4.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/4.jpg'},
                                                        {image : 'assets/images/slides/tiendas5.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/5.jpg'},
                                                        {image : 'assets/images/slides/tiendas6.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/6.jpg'},
                                                        {image : 'assets/images/slides/tiendas7.jpg', title : 'EQUUS Guatemala Verano 2013', thumb : 'assets/images/thumbs/7.jpg'}
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


       
