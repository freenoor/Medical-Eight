<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


<div class="up-footer">
  <div class="container-fluid pini">
   
        <div class="row">
          <div class="title-news col-lg-4">
            <?php dynamic_sidebar('newsletter-title');?>
          </div>
            <div class="col-lg-8">
                <div class="newsletter-div">            
                  <?php dynamic_sidebar('newsletter-footer')?>
                </div>
            </div>
      </div>
  </div>
</div>

<div class="low-footer">
  <div class="container-fluid pini">

    <div class="row papa">
      <div class="schedule col-lg-3 col-md-4 col-sm-6 mb-5">
         <?php dynamic_sidebar('schedule-footer');?>
      </div>
      <div class="linksf col-lg-3 col-md-4 col-sm-6  mb-5">
        <h2><?php dynamic_sidebar('links-footer');?></h2>
      <?php
            wp_nav_menu(array(
            'menu' => 'footer-menu',
            'menu_class' => 'navbar-nav'
             ));      ?>   
      </div>
      <div class="contactf col-lg-3 col-md-4 col-sm-6  mb-5">
             <?php dynamic_sidebar('contact-footer')?>
      </div>
      <div class="socialmf col-lg-3 col-md-12 col-sm-6  mb-5">
             <?php dynamic_sidebar('socialmedia-footer');?>
      </div>
  </div>
</div>
</div>

<div class="rights-footer">
  <div class="container-fluid pini">
    <div class="rights-div">
      <p><?php dynamic_sidebar('rights');?></p>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>