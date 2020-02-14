<!DOCTYPE html>
<html class="page" lang="en">
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <head>
      <meta charset="UTF-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimum-scale=1.0, shrink-to-fit=no"/>
      <title><?php echo $this->lang->line('titile');?></title>
	  <meta name="description" content="Казахстанская ассоциация региональных экологических инициатив"> 
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
	  <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="nav-top">
      <div class="container">
         <nav class="navbar navbar-expand-lg navbar-light">
		    
			<?php if($this->uri->segment(1) != ""){ ?>
					 <a class="navbar-brand" href="<?php echo base_url('');?>"><img style="width:150px;" src="<?php echo base_url() ?>assets/frontend/images/logo.png"></a>
			
			<?php }?>
           
			
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav m-auto">
				  <li class="nav-item">
                     <a class="nav-link" href="<?php echo base_url('abouts');?>"><?php echo $this->lang->line('nav_abount');?></a>
                  </li>			   
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#news"><?php echo $this->lang->line('nav_stay_on_top');?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#projects"><?php echo $this->lang->line('nav_projects');?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#our-team"><?php echo $this->lang->line('nav_our_teams');?></a>
                  </li>				  
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#gallery"><?php echo $this->lang->line('nav_in_the_spot');?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#video"><?php echo $this->lang->line('nav_video');?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#our-partner"><?php echo $this->lang->line('nav_partner');?></a>
                  </li>			  
                  <li class="nav-item">
                     <a class="nav-link" href="index.php#contact"><?php echo $this->lang->line('nav_contact');?></a>
                  </li>
               </ul>
               <div class="form-inline my-2 my-lg-0">
                  <!--- <div class="header__item mb-0 pr-4">
                     <a href="tel:  000">
                     <span class="phone__icon">
                     <i class="fas fa-phone"></i>
                     </span>
                     </a>
                     <div class="header__number"> 
                        <a class="d-inline-block pr-3" href="tel:  000"> 000</a>
                        <a class="d-inline-block" href="tel: 000">000</a>
                     </div>
                  </div> -->
				  
                  <div class="dropdown">
                     <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <?php echo ucfirst($this->session->userdata('site_lang')); ?>
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="<?php echo base_url('LanguageSwitcher/switchLang/english')?>" class="dropdown-item" href="javascrip:void(0)">English</a>
						<a href="<?php echo base_url('LanguageSwitcher/switchLang/russian')?>" class="dropdown-item" href="javascrip:void(0)">Russian</a>
						<a href="<?php echo base_url('LanguageSwitcher/switchLang/kazakh')?>" class="dropdown-item" href="javascrip:void(0)">Kazakh</a>
                       </div>
                  </div>
               </div>
         </nav>
         </div>
      </div>