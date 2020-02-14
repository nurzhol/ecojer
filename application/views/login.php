<!DOCTYPE html>
<html class="page" lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimum-scale=1.0, shrink-to-fit=no"/>
      <title>ECOJER</title>
      <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/frontend/images/favicon.png" sizes="32x32" />
      <meta name="application-name" content="&nbsp;"/>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/vendor/bootstrap/bootstrap.min5e1f.css?v=2"/>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/vendor/bootstrap-select/bootstrap-select.min5e1f.css?v=2"/>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/vendor/slick/slick5e1f.css?v=2"/>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/vendor/slick/slick-theme5e1f.css?v=2"/>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/vendor/fontawesome-5.5.0/css/all.min5e1f.css?v=2"/>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/custom.css">
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/frontend/css/style.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" type="text/css" media="screen" />
   </head>
   <body>
      <div class="nav-top">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="#home"><img style="width:150px;" src="<?php echo base_url() ?>assets/frontend/images/logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav m-auto">
                  <li class="nav-item">
                     <a class="nav-link active" href="#news">News</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#projects">projects</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#gallery">Gallery</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#video">Video</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#our-partner">Our Partner</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#contact">Contact</a>
                  </li>
               </ul>
               <div class="form-inline my-2 my-lg-0">
                  <div class="header__item mb-0 pr-4">
                     <a href="tel:  +7 707 461 07 90">
                     <span class="phone__icon">
                     <i class="fas fa-phone"></i>
                     </span>
                     </a>
                     <div class="header__number">
                        <a class="d-inline-block pr-3" href="tel:  +7 707 461 07 90"> +7 707 461 07 90</a>
                        <a class="d-inline-block" href="tel: +7 771 76 55 999">+7 771 76 55 999</a>
                     </div>
                  </div>
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     Russian
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="javascrip:void(0)">Kazakh</a>
                        <a class="dropdown-item" href="javascrip:void(0)">English</a>
                     </div>
                  </div>
               </div>
         </nav>
         </div>
      </div>
      <header role="banner" id="home">
         <div class="header">
            <div class="container">
               <div class="header__content">
                  <div class="row">
                     <div class="col-md-6 order-1 order-md-2">
                        <div class="header__pic wow fadeInRight"><img src="<?php echo base_url() ?>assets/frontend/images/peace.png"/></div>
                     </div>
                     <div class="col-md-6 order-2 order-md-1">
                        <h2 class="header__title wow fadeInLeft">Мы за сохранение экологии</h2>
                        <div class="header__desc wow fadeInLeft">ECO Network – это объединение организаций, которые системно внедряют в своем офисном пространстве принципы сортировки отходов для их дальнейшей переработки (макулатура, пластик, стекло, алюминий, батарейки). ECO Network в свою очередь предоставляет свой сервис этим компаниям по профессиональному обучению, установке ЭКО боксов, вывозу отходов, накоплению статистики и формированию ЭКО имиджа компании на рынке. В дальнейшем компании получают доступ к расширенному сервису.</div>
                        <div class="header__button wow fadeInUp">
                           <a href="#" data-toggle="modal" data-target="#request-main">оставить заявку</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- Main -->
      <main class="page-content" id="forum">
         <!-- News Section -->
         <section class="team news-section" id="news">
            <div class="container">
               <div class="row">
                  <div class="col-md-12 p-0">
                     <div class="partners__title mb-4">Новости</div>
                     <div id="news-slider" class="owl-carousel">
                        <div class="post-slide wow fadeInUp">
                           <div class="post-img">
                              <a href="#"><img src="<?php echo base_url() ?>assets/frontend/images/news/01.jpg" alt="news"></a>
                           </div>
                           <div class="post-content">
                              <div class="post-date">
                                 <span class="month">apr</span>
                                 <span class="date">10</span>
                              </div>
                              <h5 class="post-title"><a href="javascript:void(0)">Latest News Post</a></h5>
                              <p class="post-description">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                              </p>
                           </div>
                           <ul class="post-bar">
                              <li> <i class="fa fa-users"></i> <a href="javascript:void(0)">admin</a> </li>
                              <li> <i class="fa fa-comments"></i> <a href="javascript:void(0)">2</a> </li>
                              <li> <i class="fa fa-thumbs-up"></i> <a href="javascript:void(0)">2 Likes</a> </li>
                           </ul>
                        </div>
                        <div class="post-slide wow fadeInUp">
                           <div class="post-img">
                              <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/frontend/images/news/02.jpg" alt="news"></a>
                           </div>
                           <div class="post-content">
                              <div class="post-date">
                                 <span class="month">apr</span>
                                 <span class="date">12</span>
                              </div>
                              <h5 class="post-title"><a href="javascript:void(0)">Latest News Post</a></h5>
                              <p class="post-description">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                              </p>
                           </div>
                           <ul class="post-bar">
                              <li> <i class="fa fa-users"></i> <a href="javascript:void(0)">admin</a> </li>
                              <li> <i class="fa fa-comments"></i> <a href="javascript:void(0)">3</a> </li>
                              <li> <i class="fa fa-thumbs-up"></i> <a href="javascript:void(0)">5 Likes</a> </li>
                           </ul>
                        </div>
                        <div class="post-slide wow fadeInUp">
                           <div class="post-img">
                              <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/frontend/images/news/01.jpg" alt="news"></a>
                           </div>
                           <div class="post-content">
                              <div class="post-date">
                                 <span class="month">apr</span>
                                 <span class="date">12</span>
                              </div>
                              <h5 class="post-title"><a href="javascript:void(0)">Latest News Post</a></h5>
                              <p class="post-description">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                              </p>
                           </div>
                           <ul class="post-bar">
                              <li> <i class="fa fa-users"></i> <a href="javascript:void(0)">admin</a> </li>
                              <li> <i class="fa fa-comments"></i> <a href="javascript:void(0)">3</a> </li>
                              <li> <i class="fa fa-thumbs-up"></i> <a href="javascript:void(0)">5 Likes</a> </li>
                           </ul>
                        </div>
                        <div class="post-slide  wow fadeInUp">
                           <div class="post-img">
                              <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/frontend/images/news/02.jpg" alt="news"></a>
                           </div>
                           <div class="post-content">
                              <div class="post-date">
                                 <span class="month">apr</span>
                                 <span class="date">12</span>
                              </div>
                              <h5 class="post-title"><a href="javascript:void(0)">Latest News Post</a></h5>
                              <p class="post-description">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                              </p>
                           </div>
                           <ul class="post-bar">
                              <li> <i class="fa fa-users"></i> <a href="javascript:void(0)">admin</a> </li>
                              <li> <i class="fa fa-comments"></i> <a href="javascript:void(0)">3</a> </li>
                              <li> <i class="fa fa-thumbs-up"></i> <a href="javascript:void(0)">5 Likes</a> </li>
                           </ul>
                        </div>
                        <div class="post-slide  wow fadeInUp">
                           <div class="post-img">
                              <a href="javascript:void(0)"><img src="<?php echo base_url() ?>assets/frontend/images/news/01.jpg" alt="news"></a>
                           </div>
                           <div class="post-content">
                              <div class="post-date">
                                 <span class="month">apr</span>
                                 <span class="date">12</span>
                              </div>
                              <h5 class="post-title"><a href="javascript:void(0)">Latest News Post</a></h5>
                              <p class="post-description">
                                 Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam ipsum maxime recusandae repudiandae similique.
                              </p>
                           </div>
                           <ul class="post-bar">
                              <li> <i class="fa fa-users"></i> <a href="javascript:void(0)">admin</a> </li>
                              <li> <i class="fa fa-comments"></i> <a href="javascript:void(0)">3</a> </li>
                              <li> <i class="fa fa-thumbs-up"></i> <a href="javascript:void(0)">5 Likes</a> </li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Projects -->
         <section class="project-section" id="projects">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="partners__title mb-4 text-center">
                        наши проекты
                     </div>
                     <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                           <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                           <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                           <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <img src="<?php echo base_url() ?>assets/frontend/images/projects/project-1.jpg" class="d-block w-100" alt="project">
                              <div class="carousel-caption d-none d-md-block">
                                 <h5>First slide label</h5>
                                 <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <img src="<?php echo base_url() ?>assets/frontend/images/projects/project-2.jpg" class="d-block w-100" alt="project">
                              <div class="carousel-caption d-none d-md-block">
                                 <h5>Second slide label</h5>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                              </div>
                           </div>
                           <div class="carousel-item">
                              <img src="<?php echo base_url() ?>assets/frontend/images/projects/project-3.jpg" class="d-block w-100" alt="project">
                              <div class="carousel-caption d-none d-md-block">
                                 <h5>Third slide label</h5>
                                 <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                              </div>
                           </div>
                        </div>
                        <!--  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                           <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                           <span class="sr-only">Previous</span>
                           </a>
                           <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                           <span class="carousel-control-next-icon" aria-hidden="true"></span>
                           <span class="sr-only">Next</span>
                           </a> -->
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Our Team -->
         <section class="our-team-section" id="our-team">
            <div class="container">
               <div class="our-team">
                  <div class="our-team__title  wow jello">наша команда</div>
                  <div class="our-team__subtitle">Мы всегда готовы принять в нашу команду профессионалов, готовых изменить ситуацию в области экологии</div>
                  <div class="our-team__block wow fadeInUp">
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/w/norm/175/15afbf3d6501bc0bb238597ce453f4d2.jpg')"></div>
                           <div class="our-team__name-mobile">Евгений Мухамеджанов</div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name">Евгений Мухамеджанов</div>
                           <p class="our-team__desc">Основатель ECO Network, управляющий директор KASE</p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/w/norm/175/f85783eaeca7215b58cc5d63edf88409.jpg')"></div>
                           <div class="our-team__name-mobile">Самат Адилов</div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name">Самат Адилов</div>
                           <p class="our-team__desc">Сооснователь ECO Network, основатель и директор ESCO Energy</p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/w/norm/175/18dfc7ce0a6cd31e2131f6c6d17f7d7c.jpg')"></div>
                           <div class="our-team__name-mobile">Надежда Ващенко</div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name">Надежда Ващенко</div>
                           <p class="our-team__desc">Руководитель проектов ECO Network, экотренер</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Our Gallery -->
         <section class="our-gallery" id="gallery">
            <div class="container">
               <div class="team__title mb-4">
                  Наша галерея
               </div>
               <div class="gallery row wow fadeInLeft">
                  <div class="col-md-3 mb-3">
                     <a href="<?php echo base_url() ?>assets/frontend/images/g1.jpg">
                     <img src="<?php echo base_url() ?>assets/frontend/images/g1.jpg" alt="Chrysanthemum: nice flower.">
                     </a>
                  </div>
                  <div class="col-md-3 mb-3">
                     <a href="<?php echo base_url() ?>assets/frontend/images/g2.jpg">
                     <img src="<?php echo base_url() ?>assets/frontend/images/g2.jpg" alt="Desert mountains">
                     </a>
                  </div>
                  <div class="col-md-3 mb-3">
                     <a href="<?php echo base_url() ?>assets/frontend/images/g3.jpg">
                     <img src="<?php echo base_url() ?>assets/frontend/images/g3.jpg" alt="Jellyfish">
                     </a>
                  </div>
                  <div class="col-md-3 mb-3">
                     <a href="<?php echo base_url() ?>assets/frontend/images/g4.jpg">
                     <img src="<?php echo base_url() ?>assets/frontend/images/g4.jpg" alt="Hydrangeas">
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Video Section -->
         <section class="video-section" id="video">
            <div class="container">
               <div class="team__title mb-4">
                  видео галерея
               </div>
               <div class="gallery row wow fadeInUp">
                  <div class="col-md-3 mb-3">
                     <a href="https://www.youtube.com/embed/MqH8WtR5hWs">
                     <img src="<?php echo base_url() ?>assets/frontend/images/g2.jpg" alt="Desert mountains">
                     <i class="fas fa-play-circle wow bounce"></i>
                     </a>
                  </div>
                  <div class="col-md-3 mb-3">
                     <a href="https://www.youtube.com/embed/MqH8WtR5hWs">
                     <img src="<?php echo base_url() ?>assets/frontend/images/g4.jpg" alt="Desert mountains">
                     <i class="fas fa-play-circle wow bounce"></i>
                     </a>
                  </div>
                  <div class="col-md-3 mb-3">
                     <a href="https://www.youtube.com/embed/MqH8WtR5hWs">
                     <img src="<?php echo base_url() ?>assets/frontend/images/g3.jpg" alt="Desert mountains">
                     <i class="fas fa-play-circle wow bounce"></i>
                     </a>
                  </div>
                  <div class="col-md-3 mb-3">
                     <a href="https://www.youtube.com/embed/MqH8WtR5hWs">
                        <img src="<?php echo base_url() ?>assets/frontend/images/g1.jpg" alt="Desert mountains">
                        <i class="fas fa-play-circle wow bounce"></i>
                        <div></div>
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <!-- Our Partner -->
         <section class="our-partner text-center" id="our-partner">
            <div class="container">
               <div class="partners">
                  <div class="partners__title">наши клиенты и партнеры</div>
                  <div class="row d-flex align-items-center partners__wrapper wow fadeInUp">
                     <div class="col-md-3 mb-5 mb-md-0 mt-5 mt-md-0">
                        <a href="javascript:void(0)" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/econetwork.png"/>
                        </a>              
                     </div>
                     <div class="col-md-3 mb-5 mb-md-0">
                        <a href="javascript:void(0)" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/furjp.png"/>
                        </a>              
                     </div>
                     <div class="col-md-3 mb-5 mb-md-0">
                        <a href="javascript:void(0)" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/inbusiness.png"/>
                        </a>              
                     </div>
                     <div class="col-md-3 mb-5 mb-md-0">
                        <a href="javascript:void(0)" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/kazenergy.png"/>
                        </a>              
                     </div>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <!-- Main End -->
      <!-- Footer -->
      <footer class="footer" id="contact">
         <div class="container">
            <div class="footer__items">
               <div class="media">
                  <a href="tel:  +7 707 461 07 90">
                  <span class="phone__icon">
                  <i class="fas fa-map-marker-alt"></i>
                  </span>
                  </a>
                  <div class="media-body">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                  </div>
               </div>
            </div>
            <div class="footer__items">
               <div class="header__item">
                  <a href="tel:  +7 707 461 07 90">
                  <span class="phone__icon">
                  <i class="fas fa-phone"></i>
                  </span>
                  </a>
                  <div class="header__number">
                     <a href="tel:  +7 707 461 07 90 "> +7 707 461 07 90</a>
                     <a href="tel: +7 771 76 55 999">+7 771 76 55 999</a>
                  </div>
               </div>
            </div>
            <div class="footer__items">
               <div class="header__item">
                  <ul class="social-icons-ql mb-0 p-0">
                     <li>
                        <a class="fb-hov" href="javascript:void(0)">
                        <span class="phone__icon">
                        <i class="fab fa-facebook-f"></i>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a class="youtube-hov" href="javascript:void(0)">
                        <span class="phone__icon">
                        <i class="fab fa-youtube"></i>
                        </span>
                        </a>
                     </li>
                     <li><a class="linkedin-hov" href="javascript:void(0)">
                        <span class="phone__icon">
                        <i class="fab fa-linkedin"></i>
                        </span>
                        </a>
                     </li>
                     <li><a class="google-hov" href="javascript:void(0)">
                        <span class="phone__icon">
                        <i class="fab fa-google-plus-g"></i>
                        </span>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </footer>
      <div class="footer-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-12 footer__items text-center">
                  <p>© 2018 Eco Network Разработка сайта <a href="javascript:void(0)" target="_blank">4DClick ia</a></p>
               </div>
            </div>
         </div>
      </div>
      <!-- JavaScript -->
      <script src="<?php echo base_url() ?>assets/frontend/vendor/jquery/jquery.min5e1f.js?v=2"></script>
      <script src="<?php echo base_url() ?>assets/frontend/vendor/bootstrap/bootstrap.bundle.min5e1f.js?v=2"></script>
      <script src="<?php echo base_url() ?>assets/frontend/vendor/bootstrap-select/bootstrap-select.min5e1f.js?v=2"></script>
      <script src="<?php echo base_url() ?>assets/frontend/vendor/bootstrap-select/defaults-ru_RU.min5e1f.js?v=2"></script>
      <script src="<?php echo base_url() ?>assets/frontend/vendor/slick/slick.min5e1f.js?v=2"></script>
      <script src="<?php echo base_url() ?>assets/frontend/vendor/fontawesome-5.5.0/js/fontawesome.min5e1f.js?v=2"></script>
      <script src="<?php echo base_url() ?>assets/frontend/vendor/jquery/jquery.mask.min5e1f.js?v=2"></script>
      <script src="<?php echo base_url() ?>assets/frontend/vendor/jquery/jquery.spincrement.min5e1f.js?v=2"></script>
      <script src="<?php echo base_url() ?>assets/frontend/js/all.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/frontend/js/wow.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function() {
           // add all to same gallery
           $(".gallery a").attr("data-fancybox","mygallery");
           // assign captions and title from alt-attributes of images:
           $(".gallery a").each(function(){
             $(this).attr("data-caption", $(this).find("img").attr("alt"));
             $(this).attr("title", $(this).find("img").attr("alt"));
           });
           // start fancybox:
            $(".gallery a").fancybox();
         });
         
      </script>
      <script> 
         $(document).ready(function() {
             $("#news-slider").owlCarousel({
                 items : 3,
                 itemsDesktop:[1199,2],
                 itemsDesktopSmall:[980,2],
                 itemsMobile: [600, 1],
                 navigation : false,
                 pagination:false,
                 autoPlay : true
             });
         });
         
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
         
         // Gets the video src from the data-src on each button
         
         var $videoSrc;  
         $('.video-btn').click(function() {
          $videoSrc = $(this).data( "src" );
         });
         console.log($videoSrc);
         
         // when the modal is opened autoplay it  
         $('#myModal').on('shown.bs.modal', function (e) {
          
         // set the video src to autoplay and not to show related video. Youtube related video is like a box of chocolates... you never know what you're gonna get
         $("#video").attr('src',$videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0" ); 
         })
         
      
         // stop playing the youtube video when I close the modal
         $('#myModal').on('hide.bs.modal', function (e) {
          // a poor man's stop video
          $("#video").attr('src',$videoSrc); 
         }) 
          
         // document ready  
         });
         
      </script>
      <script type="text/javascript">
         $(document).ready(function() {
               // grab the initial top offset of the navigation 
                  var stickyNavTop = $('.nav-top').offset().top;
                  
                  // our function that decides weather the navigation bar should have "fixed" css position or not.
                  var stickyNav = function(){
                   var scrollTop = $(window).scrollTop(); // our current vertical position from the top
                        
                   // if we've scrolled more than the navigation, change its position to fixed to stick to top,
                   // otherwise change it back to relative
                   if (scrollTop > stickyNavTop) { 
                       $('.nav-top').addClass('sticky');
                   } else {
                       $('.nav-top').removeClass('sticky'); 
                   }
               };
         
               stickyNav();
               // and run it again every time you scroll
               $(window).scroll(function() {
                  stickyNav();
               });
            });   
      </script>
      <script>
         $(document).ready(function () {
            $(document).on("scroll", onScroll);
         
            $('a[href^="#"]').on('click', function (e) {
               e.preventDefault();
               $(document).off("scroll");
         
               $('a').each(function () {
                  $(this).removeClass('active');
               })
               $(this).addClass('active');
         
               var target = this.hash;
               $target = $(target);
               $('html, body').stop().animate({
                  'scrollTop': $target.offset().top+2
               }, 500, 'swing', function () {
                  window.location.hash = target;
                  $(document).on("scroll", onScroll);
               });
            });
         });
         
         function onScroll(event){
            var scrollPosition = $(document).scrollTop();
            $('nav a').each(function () {
               var currentLink = $(this);
               var refElement = $(currentLink.attr("href"));
               if (refElement.position().top <= scrollPosition && refElement.position().top + refElement.height() > scrollPosition) {
                  $('nav ul li a').removeClass("active");
                  currentLink.addClass("active");
               }
               else{
                  currentLink.removeClass("active");
               }
            });
         }
      </script>
   </body>
</html>