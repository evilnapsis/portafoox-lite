<?php
$title = ConfigurationData::getByPreffix("general_main_title")->val;
$email = ConfigurationData::getByPreffix("general_main_email")->val;

$footer_about = ConfigurationData::getByPreffix("footer_about")->val;
$phone = ConfigurationData::getByPreffix("phone")->val;
$address = ConfigurationData::getByPreffix("address")->val;
$fb_url = ConfigurationData::getByPreffix("fb_url")->val;
$tw_url = ConfigurationData::getByPreffix("tw_url")->val;
$yt_url = ConfigurationData::getByPreffix("yt_url")->val;
$gh_url = ConfigurationData::getByPreffix("gh_url")->val;
$copyright = ConfigurationData::getByPreffix("copyright")->val;


?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <!-- Site Title -->
        <title><?php echo $title; ?> - Portafolio</title>

        <!-- Site Meta Info -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="Site Description goes here">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <!-- Essential CSS Files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/material.min.css">
        <link rel="stylesheet" href="assets/css/ripples.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/settings.css">
        <link rel="stylesheet" href="assets/css/slicknav.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/style.css">
        
        <!-- Color Switcher -->
        <link rel="stylesheet" href="assets/css/switcher.css">
        
        <!-- Color Presets -->
        <link rel="stylesheet" href="assets/css/colors/pink.css">
        <link rel="stylesheet" href="assets/css/colors/purple.css">
        <link rel="stylesheet" href="assets/css/colors/deep-purple.css">
        <link rel="stylesheet" href="assets/css/colors/indigo.css">
        <link rel="stylesheet" href="assets/css/colors/blue.css">
        <link rel="stylesheet" href="assets/css/colors/yellow.css">
        <link rel="stylesheet" href="assets/css/colors/green.css">
        <link rel="stylesheet" href="assets/css/colors/red.css">


        <link rel="stylesheet" href="assets/css/responsive.css">

        <!-- Icon Family -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        


    </head>
    <body>

    <!-- header -->
      <header id="header" class="navbar navbar-default affix-top" data-spy="affix" data-offset-top="400">
        <div class="container">
          <a alt="Mea" class="site-logo" href="./">
            <h2><?php echo $title; ?></h2>
          </a>
          <nav role="navigation" id="nav-main" class="okayNav">
            <ul class="nav navbar-nav">
              <li class="active ">
                <a alt="Inicio" class="nav-link" href="./" aria-haspopup="true" aria-expanded="true">INICIO</a>
              </li>
              <li class="">
                <a alt="Portafolio" class="nav-link" href="./?view=portafolio" aria-haspopup="true" aria-expanded="true">PORTAFOLIO</a>
              </li>
              <!--
              <li  class="dropdown sub-menu">
                <a alt="Mea" class="dropdown-toggle nav-link" href="#" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Pages</a>
                <div class="dropdown-menu sub-menu-panel" aria-labelledby="dropdownMenu1">
                  <a alt="Mea" class="sub-menu-item" href="about-us.html">About Us 1</a>
                </div>
              </li>
              -->

            </ul>
            <!-- Mobile Menu Start -->
            <ul class="wpb-mobile-menu">
              <li>
                <a class="active" href="./">
                INICIO
                </a>
              </li>
              <!--
              <li>
                <a href="#">
                Pages
                </a>
                <ul class="dropdown">
                  <li>
                    <a href="about-us.html">About Us 1</a>
                  </li>
                  <li>
                    <a href="about-us2.html">About Us 2</a>
                  </li>
                  <li>
                    <a href="team.html">Team Members</a>
                  </li>
                  <li>
                    <a href="services.html">Services</a>
                  </li>
                  <li>
                      <a href="contact-us.html">Contact Us 1</a>
                  </li>
                  <li>
                      <a href="contact-us2.html">Contact Us 2</a>
                  </li>
                  <li>
                      <a href="404.html">404</a>
                  </li>
                </ul>
              </li>
              -->
            </ul>
            <!-- Mobile Menu End -->
          </nav>
        </div>
      </header>
      <!-- /header -->

        
<?php View::load("index");?>

        <!-- Footer Section -->
        <footer class="mea-footer-section">
            <!-- Footer Widget Container -->
            <div class="footer-widget-container">
                <div class="container">
                    <div class="row">
                        <!-- Single Footer Widget -->
                        <div class="col-md-3 single-footer-widget wow animated fadeInUp" data-wow-delay=".2s">
                            <h3 class="footer-title">Acerca de <?php echo ucfirst(strtolower($title));?></h3>
                            <p><?php echo $footer_about; ?></p>
                        </div>
                        <!-- Single Footer Widget -->
                        <div class="col-md-3 single-footer-widget recent-news-widget wow animated fadeInUp" data-wow-delay=".3s">
                            <h3 class="footer-title">Recientes</h3>
                            <ul>
                            <?php foreach(ProductData::get4News() as $n):?>
                                <li><a href="./?view=product&product_id=<?php echo $n->id; ?>"><?php echo $n->name; ?></a></li>
                              <?php endforeach; ?>
                            </ul>
                        </div>
                        <!-- Single Footer Widget -->
                        <div class="col-md-3 single-footer-widget recent-work-widget wow animated fadeInUp" data-wow-delay=".4s">
                                                    <h3 class="footer-title">Contactanos</h3>
                            <p><span>Telefono:</span> <?php echo $phone; ?></p>
                            <p><span>Email:</span> <?php echo $email; ?></p>
                            <p><span>Direccion:</span> <?php echo $address; ?></p>
                        <!--
                            <h3 class="footer-title">Recent Works</h3>
                            <ul>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="assets/images/work/footer-work1.png" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href=""><h4>Bower JS plugin release</h4></a>
                                            <span>September 20, 2016</span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="media">
                                        <div class="media-left">
                                            <a href="#">
                                                <img src="assets/images/work/footer-work2.png" alt="">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <a href=""><h4>Flat Icon collection</h4></a>
                                            <span>October 30, 2016</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            -->
                        </div>
                        <!-- Single Footer Widget -->
                        <div class="col-md-3 single-footer-widget footer-contact-widget wow animated fadeInUp" data-wow-delay=".5s">


                            <h3 class="footer-title mt-50">Siguenos</h3>
                            <ul>
                            <?php if($fb_url!=""):?>
                                <li>
                                    <a href="<?php echo $fb_url; ?>"><i class="fa fa-facebook"></i></a>
                                </li>
                              <?php endif; ?>
                            <?php if($tw_url!=""):?>
                                <li>
                                    <a href="<?php echo $tw_url; ?>"><i class="fa fa-twitter"></i></a>
                                </li>
                              <?php endif; ?>
                            <?php if($yt_url!=""):?>
                                <li>
                                    <a href="<?php echo $yt_url; ?>"><i class="fa fa-youtube-play"></i></a>
                                </li>
                              <?php endif; ?>
                            <?php if($gh_url!=""):?>
                                <li>
                                    <a href="<?php echo $gh_url; ?>"><i class="fa fa-github"></i></a>
                                </li>
                              <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright-section">
                <div class="container">
                    <div class="row">
                        <!-- Copuyright -->
                        <div class="col-md-6">
                            <p><?php echo $copyright; ?></p>a
                        </div>
                        <!-- Footer Links -->
                        <!--
                        <div class="col-md-6 footer-links">
                            <ul>
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Homepage</a>
                                </li>
                                <li>
                                    <a href="portfolio.html"><i class="fa fa-image"></i> Portfolio</a>
                                </li>
                                <li>
                                    <a href="blog.html"><i class="fa fa-pencil"></i> Blog</a>
                                </li>
                                <li>
                                    <a href="contact.html"><i class="fa fa-envelope"></i> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        -->
                    </div>

                </div>
            </div>
        </footer>
        <!-- Footer Section End -->

        <!-- Back To Top -->
        <a href="#" class="back-to-top">
          <div class="ripple-container"></div>
          <i class="fa fa-angle-up">
          </i>
        </a>

        <!-- Preloader -->
        <div id="loader">
          <div class="square-spin">
            <img src="assets/images/Preloader.gif" alt="MEA Proloader">
          </div>
        </div>

 
        

      <!-- jQuery Load -->
      <script src="assets/js/jquery-min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
 
      <script src="assets/js/jquery.mixitup.min.js"></script>
      <script src="assets/js/jquery.inview.js"></script>
      <script src="assets/js/jquery.counterup.min.js"></script>
      <script src="assets/js/scroll-top.js"></script>
      <script src="assets/js/material.min.js"></script>
      <script src="assets/js/ripples.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <!-- Form Validation -->
      <script src="assets/js/form-validator.min.js"></script>
      <script src="assets/js/contact-form-script.min.js"></script>
      <script src="assets/js/wow.js"></script>
      <script src="assets/js/jquery.slicknav.js"></script>
      <script src="assets/js/main.js"></script>

    </body>
</html>
