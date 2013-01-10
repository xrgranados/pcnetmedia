
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js ie ie8"> <![endif]-->
<!--[if IE 9]>         <html class="no-js ie ie9"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <title>Pcnet Media</title>
        <link rel="stylesheet" href="css/style.css">  

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <!--[if lt IE 9]>
         <script src="js/html5shiv.js"></script>
        <![endif]-->


    </head>
    <body>

         <!-- SITE CONTENT -->

         <!-- Menu -->
         <?php include_once("include/menu.php"); ?>
        

         <!-- Header -->

        <div class="parentContainer" id="header">
            <section>
                <img src="img/header/back.jpg" alt="" id="back" />
                <img src="img/header/layer1.png" alt="" id="layer1" />
                <img src="img/header/layer2.png" alt="" id="layer2" />
                <img src="img/header/layer3.png" alt="" id="layer3" />
            </section>
        </div>



         <!-- About Us -->

        <div class="parentContainer" id="aboutUs">
            <section>
                <header class="clearfix">
                    <img src="img/icons/manImg.png" class="hImg" alt="">
                    <h1>¿Quienes Somos?</h1>
                    <h2>Información acerca de nosotros.</h2>
                    <h4>Viendo la necesidad de plasmar las ideas nace PcNet Media, el grupo dedicado a todo lo relacionado con el ámbito digital.</h4>
                </header>
                <div class="leftColumn clearfix">
                    <p>Diseño, instalación y administración de redes. Venta y mantenimiento de suministros de computo en general. Soluciones y asesoría en proyectos informáticos. Diseño Gráfico. Representación 3D. Administración de Redes Sociales. Diseño Web.</p>
                    <p> Diseño, instalación y administración de redes.
                        Venta y mantenimiento de suministros de computo en general.
                        Soluciones y asesoría en proyectos informáticos.
                        Diseño Gráfico.
                        Representación 3D.
                        Administración de Redes Sociales.
                        Diseño Web.</p>
                </div>   
                <div class="rightColumn clearfix">
                    <div class="twitterWidget">
                        <img src="img/twitter.png" alt="">
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
                    <img src="img/icons/manImg.png" class="hImg" alt="">
                    <h1>Nuestro Equipo</h1>
                    <h2>Do you want meet us or join us?</h2>
                    <h4>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</h4>
                </header>
                <ol class="teamList clearfix">
                    <li>
                        <img src="img/team/member1.png" alt="">
                        <h5>Pedro Pablo Cervantes</h5>
                        <h6>CEO, UI&amp;UX DESIGNER</h6>
                        <ul class="socialIcons clearfix">
                            <li><a href="#" class="twitter">twitter</a></li>
                            <li><a href="#" class="linkedin">linkedin</a></li>
                            <li><a href="#" class="gplus">gplus</a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/team/member2.png" alt="">
                        <h5>Abraham Sunun</h5>
                        <h6>ART&amp;DESING MANAGER</h6>
                        <ul class="socialIcons clearfix">
                            <li><a href="#" class="twitter">twitter</a></li>
                            <li><a href="#" class="linkedin">linkedin</a></li>
                            <li><a href="#" class="gplus">gplus</a></li>
                        </ul>
                    </li>
                    <li>
                        <img src="img/team/member3.png" alt="">
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
                    <img src="img/icons/portfolioImg.png" class="hImg" alt="">
                    <h1>portfolio</h1>
                    <h2>Check our wonderful Ios and UX&amp;UI design</h2>
                </header>

                <div id="portfolioSliderBk" class="clearfix"><span id="folioPreloader"></span></div>

                <ul class="portfolioMenu clearfix">
                    <li class="all selected" data-filter="*">
                        <a href="#"><span>All</span><p>All</p></a>
                    </li>
                    <li class="iosDesign" data-filter=".iso">
                        <a href="#"><span>iOS Design</span><p>iOS Design</p></a>
                    </li>
                    <li class="webDesign" data-filter=".webdesign">
                        <a href="#"><span>Web Design</span><p>Web Design</p></a>
                    </li>
                </ul>

                <ol class="portfolioContainer">
                    <li class="project iso webdesign">
                        <a href="project-slider.html"><img class="mo" src="img/portfolio/lunch.png" alt="">
                            <h3>Lunch place</h3>
                            <span class="spanDate">August 21,2012</span>
                        </a>
                    </li>
                    <li class="project iso">
                        <a href="project-slider.html"><img src="img/portfolio/cloudier.png" alt="">
                            <h3>Cloudier app</h3>
                            <span class="spanDate">Octomber 13,2012</span>
                        </a>
                    </li>
                    <li class="project webdesign">
                        <a href="project-image.html" ><img src="img/portfolio/world.png" alt="">
                            <h3>World locator</h3>
                            <span class="spanDate">Octomber 8,2012</span>
                        </a>
                    </li>
                    <li class="project iso">
                        <a href="project-slider.html" ><img src="img/portfolio/pocket.png" alt="">
                            <h3>Pocket app</h3>
                            <span class="spanDate">April 24,2012</span>
                        </a>
                    </li>
                    <li class="project iso webdesign">
                        <a href="project-video.html" ><img src="img/portfolio/coachcarter.png" alt="">
                            <h3>Coachcarter</h3>
                            <span class="spanDate">August 14,2012</span>
                        </a>
                    </li>
                    <li class="project webdesign">
                        <a href="project-slider.html" ><img src="img/portfolio/user.png" alt="">
                            <h3>User Login</h3>
                            <span class="spanDate">Octomber 27,2012</span>
                        </a>
                    </li>
                    <li class="project webdesign">
                        <a href="project-slider.html" ><img src="img/portfolio/simple.png" alt="">
                            <h3>Simple Icons</h3>
                            <span class="spanDate">Octomber 14,2012</span>
                        </a>
                    </li>
                    <li class="project iso">
                        <a href="project-video.html" ><img src="img/portfolio/sketches.png" alt="">
                            <h3>Sketches App</h3>
                            <span class="spanDate">April 24,2012</span>
                        </a>
                    </li>
                    <li class="project iso">
                        <a href="project-video.html" ><img src="img/portfolio/sampler.png" alt="">
                            <h3>Sampler portfolio</h3>
                            <span class="spanDate">August 7,2012</span>
                        </a>
                    </li>
                    <li class="project webdesign">
                        <a href="project-image.html" ><img src="img/portfolio/bussines.png" alt="">
                            <h3>Bussines Web</h3>
                            <span class="spanDate">Octomber 13,2012</span>
                        </a>
                    </li>
                    <li class="project iso webdesign">
                        <a href="project-video.html" ><img src="img/portfolio/macbook.png" alt="">
                            <h3>Macbook Air 2012</h3>
                            <span class="spanDate">Octomber 9,2012</span>
                        </a>
                    </li>
                    <li class="project webdesign">
                        <a href="project-image.html" ><img src="img/portfolio/locator.png" alt="">
                            <h3>Locator Web</h3>
                            <span class="spanDate">April 17,2012</span>
                        </a>
                    </li>
                </ol>  
            </section>
        </div>

        <!-- Services -->

        <div class="parentContainer" id="services">
            <section>
                <header class="clearfix">
                    <img src="img/icons/servicesImg.png" class="hImg" alt="">
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
                            <img src="img/icons/webDesignUi.png" alt="services">
                            <div>
                                <h3>WEB &amp; UI DESIGN </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                            </div>
                        </li>
                        <li>
                            <img src="img/icons/corporateDesign.png" alt="services">
                            <div>
                                <h3>CORPORATE DESIGN </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour lorem ipsum.</p>
                            </div>
                        </li>
                        <li>
                            <img src="img/icons/iOsDevelopment.png" alt="services">
                            <div>
                                <h3>iOS DEVELOPMENT </h3>
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour lorem ipsum.</p>
                             </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>




        <!-- Contact us -->



        <div class="parentContainer" id="contactUs">
            <section>
                <header class="clearfix">
                    <img src="img/icons/contactImg.png" class="hImg" alt="">
                    <h1>Contact</h1>
                    <h2>Do you have requirements for work? Hire us!</h2>
                    <h4>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</h4>
                    <p>Theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum. The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested at men sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their.</p>
                </header>
                <div class="leftColumn clearfix">
                    <div>
                        <div class="phone">
                            <span>Phone Img</span>
                            <a href="callto:970897580" class="call"> +970 897 580</a>
                            <p>(7:00 - 20:00)</p>
                        </div>
                        <div class="email">
                            <span>Mail Img</span>
                            <a href="mailto:info@company.com" class="mail">info@company.com</a>
                        </div>
                    </div>
                    <div>
                        <img src="img/worldMap.png" class="mainMap" alt="">
                        <div id="adress">
                        <span>Pointer</span>
                            <div>
                               <h3><span>USA</span>, San Francisco, 57010, Little Parry St. 826/31</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="rightColumn clearfix">
                    <form id="contact">
                        <div>
                            <input id="formName" class="focus input" type="text" value="Name *" />
                            <input id="formBudget" class="focus input" type="text" value="Budget" />
                            <input id="formEmail" class="focus input" type="text" value="E-mail *" />
                            <input id="formTime" class="focus input" type="text" value="Timeframe" />
                        </div>
                        <textarea id="formMessage" class="focusInput">Text area... *</textarea>
                        <input id="formSubmit" type="submit" value=""/>
                    </form>
                    <p class="contactSucces">Thanks for sending your message!<br />You will receive an answer as soon as possible..</p>
                    <p class="contactError">Please complete all the fields with the correct information!</p>
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
                            <img src="img/timeline/city.png" alt="">
                            <div>
                                <h3>Last saturday we visited San Francisco</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s dollores ipsum.</p>
                                <span>November 30, 2012</span>
                            </div>
                        </div>
                        <div class="post-image post">
                            <img src="img/timeline/icons.png" alt="">
                            <div>
                                <h3>Social icon pack</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s dollores ipsum.</p>
                                <span class="date">November 30, 2012</span>
                             </div>
                        </div>
                        <div class="post-twitter post">
                            <img src="img/timeline/damin.png" alt="">
                            <div>
                                <h3>@damin1009</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="http://themeforest.net">http://themeforest.net</a> Lorem Ipsum has been the.</p>
                                <span class="date">November 30, 2012</span>
                            </div>
                        </div>
                    </div>
                    <div class="rightColumn clearfix">
                        <div class="post-twitter post">
                            <img src="img/timeline/damin109.png" alt="">
                            <div>
                                <h3>@damin 1009</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. <a href="http://themeforest.net">http://themeforest.net</a> Lorem Ipsum has been the.</p>
                                <span class="date">November 30, 2012</span>
                            </div>
                        </div>
                        <div class="post-image post">
                            <img src="img/timeline/social.png" alt="">
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
                            <img src="img/timeline/alexolag.png" alt="">
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
                            <img src="img/timeline/house.png" alt="">
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
                <p>© 2012 All Rights Reserved, Made with <span>&#10084;</span> in Prague</p>
                <ul class="socialIcons clearfix">
                    <li><a href="#" class="facebook">facebook</a></li>
                    <li><a href="#" class="twitter">twitter</a></li>
                    <li><a href="#" class="dribbble">dribbble</a></li>
                    <li><a href="#" class="linkedin">linkedin</a></li>
                    <li><a href="#" class="gplus">gplus</a></li>
                </ul>
            </section>
        </div>

        <a href="#" class="top">Back to Top</a>


        <!-- END SITE CONTENT -->

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.8.0.min.js"><\/script>')</script>
        <script src="js/plugins.min.js"></script>
        <script src="js/scripts.min.js"></script>