<!DOCTYPE html>
<html lang="es-gt">
    <head>

        <title>EQUUS Guatemala</title>
        <?php include_once("include/head_metas.php"); ?>
        
         <style type="text/css">

            .menu li.active1 {
                background: url('assets/img/menu_bg.png') repeat; 
                -webkit-border-radius: 0px 0px 15px 15px;
                   -moz-border-radius: 0px 0px 15px 15px;
                        border-radius: 0px 0px 15px 15px;
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

        <!--Arrow Navigation
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>-->
    
        <!--Time Bar-->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>

           
        
        

        <?php include_once("include/supersized.php"); ?>

        <script type="text/javascript" src="assets/js/jquery-1.2.3.min.js"></script>


        <span class="trama"></span>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
    </body>
</html>


       
