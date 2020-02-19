 <style type="text/css">
    .text-conetnt img{
      height: auto !important;
    }
 </style>
 
 <section class="team-section">
      <div class="pattern-layer"></div>

      <div class="auto-container">
         <div class="row clearfix">
            <!--Column-->
            <div class="column col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title">
                     <h2><?php echo $new->title;?></strong></h2>
                  </div>
                  <div class="text-content">
				  <img width="600" src="<?php echo base_url() ?>assets/backend/uploads/news/<?php echo $new->image; ?>">
                     <div class="text text-news">
					 <br /> <?php echo $new->description;?>
               </div>
					
                  </div>


               </div>
            </div>
         </div>
      </div>
   </section>
