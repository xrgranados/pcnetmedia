<!DOCTYPE html>
<html lang="es-gt">
    <head>

        <title>EQUUS Guatemala</title>
        <?php include_once("include/head_metas.php"); ?>
        
         <style type="text/css">

            .menu li.active1 {
                background: url('assets/img/menu_bg.png') repeat; 
                -webkit-border-radius: 0px 0px 7px 7px;
                   -moz-border-radius: 0px 0px 7px 7px;
                        border-radius: 0px 0px 7px 7px;
                -webkit-box-shadow: 0px 0px 15px #000000;
                   -moz-box-shadow: 0px 0px 15px #000000;
                        box-shadow: 0px 0px 15px #000000;
                opacity: 1;
            }
            .menu li.active1 > a {
                color: black; 
            }

        </style>

    </head>
    <body>
        
        <!-- Header -->
        <?php include_once("include/header.php"); ?>

        <!-- Arrow Navigation -->
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>
    
        <!-- Time Bar  -->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
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


       
