 
 
 <section class="team-section">
      <div class="pattern-layer"></div>

      <div class="auto-container">
         <div class="row clearfix">
            <!--Column-->
            <div class="column col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title">
                     <h2><?php echo $project->title;?></strong></h2>
                  </div>
                  <div class="text-content">
				  <img width="600" height="400" src="<?php echo base_url() ?>assets/backend/uploads/projects/<?php echo $project->image; ?>">
                     <div class="text text-news">
					 <br /> <?php echo $project->description;?></div>
					
                  </div>


               </div>
            </div>
         </div>
      </div>
   </section>
