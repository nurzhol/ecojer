
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
                     <p><?php echo $this->lang->line('footer_location');?></p>
                  </div>
               </div>
            </div>
            <div class="footer__items">
               <div class="header__item">
                  <a href="tel:  +7(7172)610-145">
                  <span class="phone__icon">
                  <i class="fas fa-phone"></i>
                  </span>
                  </a>
                  <div class="header__number">
                     <a href="tel:  +7(7172)610-145 ">+7 (7172) 610-145</a>
					 <a href="tel: +7(7172)610-149">+7 (7172) 610-149</a> 
                     <p>info@ecojer.kz</p>
                  </div>
               </div>
            </div>
            <div class="footer__items">
               <div class="header__item">
                  <ul class="social-icons-ql mb-0 p-0">
                     <li>
                        <a class="fb-hov" href="https://m.facebook.com/ecojerkz/">
                        <span class="phone__icon">
                        <i class="fab fa-facebook-f"></i>
                        </span>
                        </a>
                     </li>
                     <li>
                        <a class="youtube-hov" href="https://www.youtube.com/channel/UC7cyJ9NriyFqZnkXJXUqGPg">
                        <span class="phone__icon">
                        <i class="fab fa-youtube"></i>
                        </span>
                        </a>
                     </li>
                     <li><a class="linkedin-hov" href="https://www.instagram.com/ecojerkz/">
                        <span class="phone__icon">
                        <i class="fab fa-instagram"></i>
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
                  <p><?php echo $this->lang->line('footer_copyright');?><a href="https://remark.kz/" target="_blank">&nbsp;Remark.kz</a></p>
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