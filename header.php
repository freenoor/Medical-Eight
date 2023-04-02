<!DOCTYPE html>
 <html <?php language_attributes();?>>
    <head>    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="C:\xampp\htdocs\realestate\wp-content\themes\realestate\assets\fontawesome-free-5.12.0-web/css/fontawesome.css" rel="stylesheet">
  <link href="C:\xampp\htdocs\realestate\wp-content\themes\realestate\assets\fontawesome-free-5.12.0-web/css/brands.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hover.css/2.3.1/css/hover-min.css" integrity="sha256-c+C87jupO1otD1I5uyxV68WmSLCqtIoNlcHLXtzLCT0=" crossorigin="anonymous" />
  <link href="C:\xampp\htdocs\realestate\wp-content\themes\realestate\assets\fontawesome-free-5.12.0-web/css/solid.css" rel="stylesheet">
      <?php wp_head();?>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />
      <style>
@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');
</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">

   </head>

   <body <?php body_class();?>>

<div class="sidebar">
  <div class="sidenav">

                    <div class="logoja">
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                              ?>
                        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
                          <?php dynamic_sidebar('logo-header'); ?>
                        </a>
                     </div>

             <div class="menu-header">    
                    <button id="navbutton1"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"><?php dynamic_sidebar('menu-header');?> </span>
                    </button>
                                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                         <div class="menu0">
                                       <ul class="navbar-nav mr-auto">
                                            <?php
                                        wp_nav_menu(array(
                                          'menu' => 'Primary Menu',
                                          'menu_class' => 'navbar-nav'
                                        ));      ?>                                        
                                       </ul>     
                                       </div>
                                    </div>
             </div>
                                                                
                <div class="phone-header">
                 <button id="navbutton2"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation">
                      <span><?php dynamic_sidebar('phone-header');?></span>
                    </button>
                                     <div class="collapse navbar-collapse" id="navbarSupportedContent1">
                                         <div class="menu1">
                                     <?php dynamic_sidebar('phone-numbers');?> 
                                         </div>
                                       </div>
                </div>
                <div class="email-header">
                 <button id="navbutton3"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent2" aria-controls="navbarSupportedContent2" aria-expanded="false" aria-label="Toggle navigation">
                      <span><?php dynamic_sidebar('email-header');?></span>
                    </button>
                                     <div class="collapse navbar-collapse" id="navbarSupportedContent2">
                                         <div class="menu2">
                                     <?php dynamic_sidebar('contanct-emails');?>  
                                         </div>
                                       </div>

                </div> 
                <div class="location-header">
                 <button id="navbutton4"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent3" aria-controls="navbarSupportedContent3" aria-expanded="false" aria-label="Toggle navigation">
                      <span> <?php dynamic_sidebar('location-header');?></span>
                    </button>
                                     <div class="collapse navbar-collapse" id="navbarSupportedContent3">
                                         <div class="menu3">
                                     <?php dynamic_sidebar('location-info');?>  
                                         </div>
                                       </div>
                </div>  
                <div class="time-header">
                    
                 <button id="navbutton5"class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
                      <span> <?php dynamic_sidebar('time-header');?> </span>
                    </button>
                                     <div class="collapse navbar-collapse" id="navbarSupportedContent4">
                                         
                                         <div class="menu4">
                                     <?php dynamic_sidebar('schedule-header');?>       
                                        </div>
                                    </div>                   
                                                         
         </div>
       </div> 
       <div class="overlay"></div>
</div>



<div class="container-fluid pini">
    
   <div class="second-header">
   <div class="buttoni-responsive">
       <button><i class="fas fa-arrow-right fa-2x"></i></button>
        
    </div>
    <div class="head2-form">
      <div class="socialmedia-header">
          <div class="social-media-head">
         <a><?php dynamic_sidebar('header-facebook');?></a>
         <?php dynamic_sidebar('header-instagram');?>
         <?php dynamic_sidebar('header-twitter');?>
         </div>
      </div>
 
            <div class="appointment-button">
                <button id="realbutton" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">BOOK AN APPOINTMENT</button>
                              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                             <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">MAKE AN APPOINTMENT</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                             </div>
                                             <script type="text/javascript">
    jQuery(document).ready(function () {
        jQuery("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        jQuery('#dismiss, .overlay').on('click', function () {
            // hide sidebar
            jQuery('#sidebar').removeClass('active');
            // hide overlay
            jQuery('.overlay').removeClass('active');
        });

        jQuery('#sidebarCollapse').on('click', function () {
            // open sidebar
            jQuery('#sidebar').addClass('active');
            // fade in the overlay
            jQuery('.overlay').addClass('active');
            jQuery('.collapse.in').toggleClass('in');
            jQuery('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
<script type="text/javascript">
        jQuery('#navbutton1').on('click', function () {
            jQuery('.menu-header').toggleClass('active');
            jQuery('.phone-header').removeClass('active');
            jQuery('.email-header').removeClass('active');
            jQuery('.location-header').removeClass('active');
            jQuery('.time-header').removeClass('active');
            jQuery('#navbarSupportedContent1').removeClass('show');
            jQuery('#navbarSupportedContent2').removeClass('show');
            jQuery('#navbarSupportedContent3').removeClass('show');
            jQuery('#navbarSupportedContent4').removeClass('show');
        });
        jQuery('#navbutton2').on('click', function () {
            jQuery('.phone-header').toggleClass('active');
            jQuery('.menu-header').removeClass('active');
            jQuery('.email-header').removeClass('active');
            jQuery('.location-header').removeClass('active');
            jQuery('.time-header').removeClass('active');
            jQuery('#navbarSupportedContent').removeClass('show');
            jQuery('#navbarSupportedContent2').removeClass('show');
            jQuery('#navbarSupportedContent3').removeClass('show');
            jQuery('#navbarSupportedContent4').removeClass('show');
        });
        jQuery('#navbutton3').on('click', function () {
            jQuery('.email-header').toggleClass('active');
            jQuery('.menu-header').removeClass('active');
            jQuery('.phone-header').removeClass('active');
            jQuery('.location-header').removeClass('active');
            jQuery('.time-header').removeClass('active');
            jQuery('#navbarSupportedContent1').removeClass('show');
            jQuery('#navbarSupportedContent').removeClass('show');
            jQuery('#navbarSupportedContent3').removeClass('show');
            jQuery('#navbarSupportedContent4').removeClass('show');
        });
        jQuery('#navbutton4').on('click', function () {
            jQuery('.location-header').toggleClass('active');
            jQuery('.menu-header').removeClass('active');
            jQuery('.phone-header').removeClass('active');
            jQuery('.email-header').removeClass('active');
            jQuery('.time-header').removeClass('active');
            jQuery('#navbarSupportedContent1').removeClass('show');
            jQuery('#navbarSupportedContent2').removeClass('show');
            jQuery('#navbarSupportedContent').removeClass('show');
            jQuery('#navbarSupportedContent4').removeClass('show');
        });
        jQuery('#navbutton5').on('click', function () {
            jQuery('.time-header').toggleClass('active');
            jQuery('.menu-header').removeClass('active');
            jQuery('.phone-header').removeClass('active');
            jQuery('.email-header').removeClass('active');
            jQuery('.location-header').removeClass('active');
            jQuery('#navbarSupportedContent1').removeClass('show');
            jQuery('#navbarSupportedContent2').removeClass('show');
            jQuery('#navbarSupportedContent3').removeClass('show');
            jQuery('#navbarSupportedContent').removeClass('show');
        });
        jQuery('.buttoni-responsive').on('click', function () {
            jQuery('#navbarSupportedContent').removeClass('show');
            jQuery('#navbarSupportedContent1').removeClass('show');
            jQuery('#navbarSupportedContent2').removeClass('show');
            jQuery('#navbarSupportedContent3').removeClass('show');
            jQuery('#navbarSupportedContent4').removeClass('show');
        });
</script>
<script>
    jQuery('.buttoni-responsive').on('click', function () {
            // open sidebar
            jQuery('.sidebar').toggleClass('active222');
            // fade in the overlay
        });
    </script>
    <script>
    jQuery('.buttoni-responsive').on('click', function () {
            // open sidebar
            jQuery('.buttoni-responsive').toggleClass('aktiv');
            // fade in the overlay
        });
    </script>
                                             <div class="modal-body">
                                                <form>
                                                      <?php dynamic_sidebar('make-appointment'); ?>
                                                </form>

                                             </div> 
                                          </div>
                                    </div>
                                 </div>
                                </div>           
      </div>
   </div>
</div>