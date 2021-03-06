
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

        <!--[if lt IE 9]>
         <script src="assets/js/html5shiv.js"></script>
        <![endif]-->

    </head>
    <body>

         <!-- Menu -->
         <?php include_once("include/menu.php"); ?>
        
        <!-- Header -->
        <div class="parentContainer" id="header">
            <section>
                <img src="assets/img/header/back.jpg" alt="" id="back" />
                <img src="assets/img/header/layer1.png" alt="" id="layer1" />
                <img src="assets/img/header/layer2.png" alt="" id="layer2" />
                <img src="assets/img/header/layer3.png" alt="" id="layer3" />
            </section>
        </div>

         <!-- About Us -->
        <div class="parentContainer" id="aboutUs">
            <section>
                <header class="clearfix">
                    <img src="assets/img/icons/manImg.png" class="hImg" alt="">
                    <h1>¿Quienes Somos?</h1>
                    <h2>Información acerca de nosotros.</h2>
                    <h4>Viendo la necesidad de plasmar las ideas nace Pcnet Media, el grupo dedicado a todo lo relacionado con el ámbito digital.</h4>
                </header>
                <div class="leftColumn clearfix">
                    <p>En Pcnet Media Ofrecemos:</p>
                    <p> <dl><dd>• Diseño, instalación y administración de redes.<br>
                        • Venta y mantenimiento de suministros de computo en general.<br>
                        • Soluciones y asesoría en proyectos informáticos.<br>
                        • Diseño Gráfico.<br>
                        • Representación 3D.<br>
                        • Administración de Redes Sociales.<br>
                        • Diseño Web.</dd></dl></p>
                </div>   
                <div class="rightColumn clearfix">
                    <div class="twitterWidget">
                        <img src="assets/img/twitter.png" alt="">
                        <ul>
                            <li>
                                <p class="twitterId">Latest tweets are loading...</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>




        <!-- Our Team -->
        <div class="parentContainer" id="ourTeam">
            <section>
                <header class="clearfix">
                    <img src="assets/img/icons/manImg.png" class="hImg" alt="">
                    <h1>Nuestro Equipo</h1>
                    <h2>¿Quieres conocer más acerca de nosotros?</h2>
                    <h4>Pcnet Media esta conformado por un grupo de entusiastas, con la visión de crear e innovar.</h4>
                </header>
                <ol class="teamList clearfix">
                    <li>
                        <img src="assets/img/team/member1.png" alt="">
                        <h5>Juan Jose Serra</h5>
                        <h6></h6>
                        <ul class="socialIcons clearfix">
                            <li><a href="#" class="twitter">twitter</a></li>
                            <li><a href="#" class="linkedin">linkedin</a></li>
                            <li><a href="#" class="gplus">gplus</a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="assets/img/team/member1.png" alt="">
                        <h5>Pedro Pablo Cervantes</h5>
                        <h6>CEO, IT MANAGER</h6>
                        <ul class="socialIcons clearfix">
                            <li><a href="#" class="twitter">twitter</a></li>
                            <li><a href="#" class="linkedin">linkedin</a></li>
                            <li><a href="#" class="gplus">gplus</a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="assets/img/team/member2.png" alt="">
                        <h5>Abraham Sunun</h5>
                        <h6>ART&amp;DESING MANAGER</h6>
                        <ul class="socialIcons clearfix">
                            <li><a href="#" class="twitter">twitter</a></li>
                            <li><a href="#" class="linkedin">linkedin</a></li>
                            <li><a href="#" class="gplus">gplus</a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="assets/img/team/member3.png" alt="">
                        <h5>Rafael Granados</h5>
                        <h6>Web Designer</h6>
                        <ul class="socialIcons clearfix">
                            <li><a href="https://twitter.com/xrgranados" class="twitter">twitter</a></li>
                            <li><a href="http://www.linkedin.com/pub/rafael-granados/59/36/b16" class="linkedin">linkedin</a></li>
                            <li><a href="#" class="gplus">gplus</a></li>
                        </ul>
                    </li>
                    
                </ol> 
            </section>
        </div>






        <!-- Portfolio -->
        <div class="parentContainer" id="portfolio">
            <section>

                <header class="clearfix">
                    <img src="assets/img/icons/portfolioImg.png" class="hImg" alt="">
                    <h1>Servicios</h1>
                    <h2>Conozca más acerca de nuestros servicios </h2>
                </header>

                <div id="portfolioSliderBk" class="clearfix"><span id="folioPreloader"></span></div>

               <ul class="portfolioMenu clearfix">
                    <li class="all selected" data-filter="*">
                        <a href="#"><span>All</span><p>Todos</p></a>
                    </li>
                    <li class="webDesign" data-filter=".it">
                        <a href="#"><span>IT</span><p>IT</p></a>
                    </li>
                    <li class="iosDesign" data-filter=".graph">
                        <a href="#"><span>iOS Design</span><p>Diseño Grafico</p></a>
                    </li>
                    <li class="webDesign" data-filter=".webdesign">
                        <a href="#"><span>Web Design</span><p>Diseño Web</p></a>
                    </li>
                </ul>

                <ol class="portfolioContainer">
                     <li class="project it">
                        <a href="project-slider.html"><img class="mo" src="assets/img/portfolio/support.png" alt="">
                            <h3>Soporte Técnico</h3>
                        </a>
                    </li>
                    <li class="project webdesign">
                        <a href="project-slider.html"><img class="mo" src="assets/img/portfolio/sampler.png" alt="">
                            <h3>Diseño Web</h3>
                        </a>
                    </li>
                    <li class="project graph">
                        <a href="project-slider.html"><img src="assets/img/portfolio/lunch.png" alt="">
                            <h3>Diseño Grafico</h3>
                        </a>
                    </li>
                    <li class="project graph">
                        <a href="project-slider.html"><img src="assets/img/portfolio/3d.png" alt="">
                            <h3>Representación 3d</h3>
                        </a>
                    </li>
                    <li class="project webdesign">
                        <a href="project-image.html" ><img src="assets/img/portfolio/fbcamp.png" alt="">
                            <h3>Campañas Facebook</h3>
                        </a>
                    </li>
                </ol>  
            </section>
        </div>

        <!-- Services 

        <div class="parentContainer" id="services">
            <section>
                <header class="clearfix">
                    <img src="assets/img/icons/servicesImg.png" class="hImg" alt="">
                    <h1>Services</h1>
                    <h2>What we can do?</h2>
                    <h4>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</h4>
                </header>
                <div class="leftColumn clearfix">
                    <ul class="servicesStatistics">
                        <li class="clearfix" id="html">
                            <h5>Html5</h5>
                            <span class="barBk">
                                <span style="width:80%" class="bar">80%</span>
                            </span>
                        </li>
                        <li class="clearfix" id="css">
                            <h5>Css 3</h5>
                            <span class="barBk">
                                <span style="width:95%" class="bar">95%</span>
                            </span>
                        </li>
                        <li class="clearfix" id="wordpress">
                            <h5>WordPress</h5>
                            <span class="barBk">
                                <span style="width:70%" class="bar">70%</span>
                            </span>
                        </li>
                        <li class="clearfix" id="php">
                            <h5>Php</h5>
                            <span class="barBk">
                                <span style="width:50%" class="bar">50%</span>
                            </span>
                        </li>
                        <li class="clearfix" id="photoshop">
                            <h5>Adobe Potoshop</h5>
                            <span class="barBk">
                                <span style="width:100%" class="bar">100%</span>
                            </span>
                        </li>
                    </ul>
                </div>
                <div class="rightColumn clearfix">
                    <ul class="servicesList clearfix">
                        <li>
                            <img src="assets/img/icons/webDesignUi.png" alt="services">
                            <div>
                                <h3>WEB &amp; UI DESIGN </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/icons/corporateDesign.png" alt="services">
                            <div>
                                <h3>CORPORATE DESIGN </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour lorem ipsum.</p>
                            </div>
                        </li>
                        <li>
                            <img src="assets/img/icons/iOsDevelopment.png" alt="services">
                            <div>
                                <h3>iOS DEVELOPMENT </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour lorem ipsum.</p>
                             </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>-->




        <!-- Contact us -->



        <div class="parentContainer" id="contactUs">
            <section>
                <header class="clearfix">
                    <img src="assets/img/icons/contactImg.png" class="hImg" alt="">
                    <h1>Contact</h1>
                    <h2>¿Requiere de nuestros servicios? Cuente con nosotros.</h2><br><br>
                    <p>Si desea contactarse con nosotros, puede hacerlo a través del siguiente formulario.
                        Nos pondremos en contacto en breve.</p>
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
                <div class="rightColumn clearfix">
                    <form id="contact">
                        <div>
                            <input id="formName" class="focus input" type="text" value="Nombre *" />
                            <input id="formBudget" class="focus input" type="text" value="Teléfono" />
                            <input id="formEmail" class="focus input" type="text" value="E-mail *" />
                            <!--<input id="formTime" class="focus input" type="text" value="otro" />-->
                        </div>
                        <textarea id="formMessage" class="focusInput">Mensaje... *</textarea>
                        <input id="formSubmit" type="submit" value=""/>
                    </form>
                    <p class="contactSucces">Gracias por enviar su mensaje!<br />Nos pondremos en contacto en breve..</p>
                    <p class="contactError">Por favor, complete todos los campos con la información correcta!</p>
                </div>
            </section>
        </div>

        <!-- Timeline -->


        <div class="parentContainer" id="timeline">
            <section>
                <span id="timelineBorder">border</span>
                <a href="#" class="monthButton">November 2012</a>
                <div class="month clearfix">
                    <div class="leftColumn clearfix">
                        <div class="post-image post">
                            <img src="assets/img/timeline/city.png" alt="">
                            <div>
                                <h3>Last saturday we visited San Francisco</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s dollores ipsum.</p>
                                <span>November 30, 2012</span>
                            </div>
                        </div>
                        <div class="post-image post">
                            <img src="assets/img/timeline/icons.png" alt="">
                            <div>
                                <h3>Social icon pack</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s dollores ipsum.</p>
                                <span class="date">November 30, 2012</span>
                             </div>
                        </div>
                        <div class="post-twitter post">
                            <img src="assets/img/timeline/damin.png" alt="">
                            <div>
                                <h3>@damin1009</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="http://themeforest.net">http://themeforest.net</a> Lorem Ipsum has been the.</p>
                                <span class="date">November 30, 2012</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightColumn clearfix">
                        <div class="post-twitter post">
                            <img src="assets/img/timeline/damin109.png" alt="">
                            <div>
                                <h3>@damin 1009</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="http://themeforest.net">http://themeforest.net</a> Lorem Ipsum has been the.</p>
                                <span class="date">November 30, 2012</span>
                            </div>
                        </div>
                        <div class="post-image post">
                            <img src="assets/img/timeline/social.png" alt="">
                            <div>
                                <h3>Social icon pack</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s dollores ipsum.</p>
                                <span class="date">November 30, 2012</span>
                            </div>
                        </div>
                        <div class="post-text post">
                            <h3>Do you love design? Join us!</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s dollores ipsum.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                            <span class="date">November 30, 2012</span>
                        </div>
                    </div>
                </div>
                <a href="#" class="monthButton">October 2012</a>
                <div class="month clearfix">
                    <div class="leftColumn clearfix">
                        <div class="post-twitter post">
                            <img src="assets/img/timeline/alexolag.png" alt="">
                            <div>
                                <h3>@alexolag</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="http://google.com">http://google.com</a> Lorem Ipsum has been the.</p>
                                <span class="date">October 30, 2012</span>
                            </div>
                        </div>
                        <div class="post-text post">
                            <h3>Do you love design? Join us!</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s dollores ipsum.</p>
                            <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham. Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>
                           <span class="date">October 30, 2012</span>
                        </div>
                    </div>
                    <div class="rightColumn clearfix">
                        <div class="post-image post">
                            <img src="assets/img/timeline/house.png" alt="">
                            <div>
                                <h3>Social icon pack</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s dollores ipsum.</p>
                                <span class="date">October 30, 2012</span>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="#" class="monthButton"> Load More</a>
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
    </body>
</html>