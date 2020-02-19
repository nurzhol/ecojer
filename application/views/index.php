	<header role="banner" id="home">
			<div class="header">
				<div class="container">
					<div class="header__content">
						<div class="row">
							<div class="col-md-6 order-1 order-md-2">
								<h3 class="header__title wow fadeInLeft"><?php echo $this->lang->line('left_header_title');?></h3>
								<div class="header__button wow fadeInUp"> <a href="<?php echo base_url('abouts');?>"><?php echo $this->lang->line('learn_more');?></a>
								</div>
							</div>
							<div class="col-md-6 order-2 order-md-1 head-slice">
								<div class="header_pic wow fadeInLeft" style="margin-top:100px;">
									<img src="<?php echo base_url() ?>assets/frontend/images/peace.png" />
								</div>
								<div class="wow fadeInUp"> <h1 class="new-brand">ECOJER</h1>
								</div>
								<div class="header__desc wow fadeInLeft rus-text"><?php echo $this->lang->line('right_header_title');?></div>
								
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
                     <div class="partners__title mb-4"><?php echo $this->lang->line('nav_stay_on_top');?></div>
                     <div id="news-slider" class="owl-carousel">
					 
					   <?php $j=0; if($news) {foreach($news as $new){ if($this->session->userdata('site_lang') == $new->language){ if($j<= 100){?>
                        <div class="post-slide wow fadeInUp">
                           <div class="post-img" style="background-image: url(<?php echo base_url("assets/backend/uploads/news/".$new->image)?>); background-size: cover; height: 200px; background-position: center center;">
                              <!-- <a href="#"><img style="height:200px"  src="<?php echo base_url() ?>assets/backend/uploads/news/<?php echo $new->image;?>" alt="<?php echo $new->title;?>"></a> -->
                           </div>
                           <div class="post-content" >
                              <div class="post-date">
                                 <span class="month"><?php echo $this->lang->line(date('M',strtotime($new->created_date)));?></span>
                                 <span class="date"><?php echo date('d',strtotime($new->created_date));?></span>
                              </div>
                              <h5 class="post-title"><a href="<?php echo base_url('news/'.$new->id);?>"><?php echo $new->title;?></a></h5>
                              <p class="post-description" style="height:auto;">
                               	<?php   $new_text =$new->description;
									         if (strlen($new->description) > 200)
												{
													// If so, cut the string at the character limit
													//$new_text = substr($new->description, 0, 200);
                                       $new_text = substrwords($new->description, 200);
													// Trim off white space
													$new_text = trim($new_text);
                                       //$new_text = preg_replace('/[^A-Za-z0-9\-]/', '', $new_text);
													// Add at end of text ...
													echo $new_text;
												}else{
													echo $new_text;
												}
												?><a class="btn" href="<?php echo base_url('news/'.$new->id);?>"><?php echo $this->lang->line('learn_more');?></a>
                              </p>
                           </div>

                        </div>
						
					   <?php $j++;}}}}?>
						

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
                        <?php echo $this->lang->line('nav_projects');?>
                     </div>
                     <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <?php $i=0; if($projects) {foreach($projects as $project){if($this->session->userdata('site_lang') == $project->language){ ?>
							<li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i; ?>" <?php if($i==0){?>class="active" <?php }?>></li>
						  <?php $i++;}}}?>
                        </ol>
                        <div class="carousel-inner">
						   <?php $i=0; if($projects) {foreach($projects as $project){if($this->session->userdata('site_lang') == $project->language){?>
                           <div class="carousel-item <?php if($i==0){?>active<?php }?>">
                              <img src="<?php echo base_url() ?>assets/backend/uploads/projects/<?php echo $project->image; ?>" class="d-block w-100" alt="<?php echo $project->title; ?>">
                              <div class="carousel-caption d-none d-md-block">
                                 <a href="<?php echo base_url('projects/'.$project->id);?>"><h5><?php echo $project->title; ?></h5>
                                 <p><?php echo $project->description; ?></p></a>
                              </div>
                           </div>
						   <?php $i++;}}}?>
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
                  <div class="our-team__title  wow jello"> <?php echo $this->lang->line('nav_our_teams');?></div>
                  <!-- <div class="our-team__subtitle">Мы всегда готовы принять в нашу команду профессионалов, готовых изменить ситуацию в области экологии</div> -->
                  <div class="our-team__block wow fadeInUp">
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/1.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_1_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_1_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_1_description');?></p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/2.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_2_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_2_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_2_description');?></p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/3.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_3_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_3_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_3_description');?></p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/4.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_4_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_4_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_4_description');?></p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/5.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_5_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_5_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_5_description');?></p>
                        </div>
                     </div>					 
                  </div>
				  
                  <div class="our-team__block wow fadeInUp">
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/6.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_6_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_6_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_6_description');?></p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/7.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_7_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_7_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_7_description');?></p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/8.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_8_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_8_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_8_description');?></p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/9.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_9_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_9_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_9_description');?></p>
                        </div>
                     </div>
                     <div class="our-team__wrapper">
                        <div class="our-team__item">
                           <div class="our-team__pic" style="background-image: url('<?php echo base_url() ?>assets/frontend/images/team/10.jpg')"></div>
                           <div class="our-team__name-mobile"> <?php echo $this->lang->line('team_10_name');?></div>
                        </div>
                        <div class="our-team__item">
                           <div class="our-team__name"> <?php echo $this->lang->line('team_10_name');?></div>
                           <p class="our-team__desc"> <?php echo $this->lang->line('team_10_description');?></p>
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
                 <?php echo $this->lang->line('nav_in_the_spot');?>
               </div>
               <div class="gallery row wow fadeInLeft">
			     <?php if($photogallery) {foreach($photogallery as $photo){if($this->session->userdata('site_lang') == $photo->language){ ?>
                  <div class="col-md-3 mb-3">
                     <a href="<?php echo base_url() ?>assets/backend/uploads/photogallery/<?php echo $photo->image; ?>">
                     <img src="<?php echo base_url() ?>assets/backend/uploads/photogallery/<?php echo $photo->image; ?>" alt="<?php echo $photo->title; ?>">
                     </a>
                  </div>
                 <?php }}}?>				  
               </div>
            </div>
         </section>
         <!-- Video Section -->
         <section class="video-section" id="video">
            <div class="container">
               <div class="team__title mb-4">
                  <?php echo $this->lang->line('nav_video');?>
               </div>
               <div class="gallery row wow fadeInUp">
			   <?php if($videogallery) {foreach($videogallery as $video){if($this->session->userdata('site_lang') == $video->language){?>
                  <div class="col-md-3 mb-3">
                     <a href="<?php echo base_url() ?>assets/backend/uploads/videogallery/videos/<?php echo $video->video; ?>">
                     <img src="<?php echo base_url() ?>assets/backend/uploads/videogallery/thumbnails/<?php echo $video->image; ?>" alt="<?php echo $video->title; ?>">
                     <i class="fas fa-play-circle wow bounce"></i>
                     </a>
					 <p><?php echo $video->title; ?></p>
                  </div>
			   <?php }}}?>
               </div>
            </div>
         </section>
         <!-- Our Partner -->
         <section class="our-partner text-center" id="our-partner">
            <div class="container">
               <div class="partners">
                  <div class="partners__title"><?php echo $this->lang->line('nav_partner');?></div>
                  <div class="row d-flex align-items-center partners__wrapper wow fadeInUp">
                     <div class="col-md-3 mb-5 mb-md-0">
                        <a href="https://fundwomen.kz/" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/furjp.png"/>
                        </a>              
                     </div>				  
                     <div class="col-md-2 mb-5 mb-md-0">
                        <a href="https://inbusiness.kz" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/inbusiness.png"/>
                        </a>              
                     </div>	
                     <div class="col-md-2 mb-5 mb-md-0">
                        <a href="https://www.youtube.com/channel/UCTI_-Eu_ZUQyYR4DwyD5odw" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/abc.jpg"/>
                        </a>              
                     </div>	
					<div class="col-md-2 mb-5 mb-md-0">
                        <a href="https://marden.kz/" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/marden.png"/>
                        </a>              
                     </div>	
					  
                      <div class="col-md-3 mb-5 mb-md-0 mt-5 mt-md-0">
                        <a href="https://www.econetwork.kz/" target="_blank">       
                        <img src="<?php echo base_url() ?>assets/frontend/images/partners/econetwork.png"/>
                        </a>              
                     </div>	
                  </div>
				  

               </div>
            </div>
         </section>
      </main>
      <!-- Main End -->