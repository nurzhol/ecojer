<div class="container">
   
<section class="team-section">
      <div class="pattern-layer"></div>

      <div class="auto-container">
         <div class="row clearfix">
            <!--Column-->
            <div class="column col-lg-12 col-md-12 col-sm-12">
                  <div class="sec-title" style="text-align: center;">
                     <h2><?php echo $news[0]->title; ?></h2>
                  </div>
                  <div class="text-content">
              <img src="<?php echo base_url() ?>assets/backend/uploads/news/<?php echo $news[0]->image; ?>" style="height: 400px; width: 100%;">
                     <div class="text text-news"><?php echo $news[0]->description; ?> </div>
               
                  </div>


               </div>
            </div>
         </div>
      
   </section>

</div>