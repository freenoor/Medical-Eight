<!--
    Template Name: Home
    -->

    <?php get_header();?>

    <div class="container-fluid pini3">
    <section class="slider">
      
      <div class="first-slider">
          <div id="demo" class="carousel slide">
              <?php
              $args = array(
                  'post_type' => 'home-slider',
                  'posts_per_page' => '-1',
              );
              $slides = new WP_Query($args); ?>
              <?php
              $i = 0;
              $count = 0; ?>
              <div class="carousel-inner" id="carouselExampleCaptions">
                  <?php
                  if ($slides->have_posts()) :
                      while ($slides->have_posts()) : $slides->the_post(); ?>
                          <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">

                            <div class="slider-img" style="background-image: url('<?php the_post_thumbnail_url(); ?>')">
                              <div class="slider-kontenti" data-aos="fade-left">
                                <div class="title-slider animated zoomIn">
                                <h2><?php the_field('slider-title')?></h2></div>
                                <div class="text-slider animated fadeInLeft">
                                <p><?php the_field('slider-text');?></p></div>
                                <div class="buttonat1 animated lightSpeedIn">    
                                <a  href="http://localhost/healthdepartament/?page_id=15"><?php the_field('buttoni1');?></a> 
                                <a href="http://localhost/healthdepartament/?page_id=21"><?php the_field('butooni2');?></a></div>
                             </div>

                            </div>
                                
                          </div>
                  <?php
                          $count++;
                          wp_reset_postdata();
                      endwhile;
                  endif; ?>
              </div>

              <a class=" carousel-control-prev" href="#demo" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class=" carousel-control-next" href="#demo" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>

    


</section>
</div> 



<!-- slider -->



<div class="container-fluid pini">
    <section class="home-service">
        <div class="content-titles " data-aos="fade-right">
                        <p><svg 
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="65px" height="1px">
                <path fill-rule="evenodd"  fill="rgb(102, 215, 210)"
                d="M-0.000,1.000 L-0.000,-0.000 L65.000,-0.000 L65.000,1.000 L-0.000,1.000 Z"/>
                </svg><?php the_field('homeservicetitle');?></p>
        </div>

        <div class="container-fluid pini1"> 
            <section class="service-posts">
                 <div class="row">
                            <?php
                        $args = array(
                            'post_type' => 'services',
                            'posts_per_page' => '6',
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                            $loop->the_post();
                        ?>
                            <div class="col-lg-4 mb-4 col-md-4 col-sm-6 aba" data-aos="fade-up">
                                                                            
                                <div class="contdiv">
                                    <div class="servicesimg">
                                        <div class="title-logo">
                                            <?php the_field('logo')?>
                                            <h4><?php the_title();?></h4>
                                        </div>
                                        <p><?php echo get_the_excerpt();?><p>  
                                        <a href="<?php the_permalink();?>"><p><?php the_field('readmore_button')?></p></a>                                                  
                                    </div>
                                </div>
                            </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                 </div>
             </section>
         </div>
     </section>  
     
     <section class="Appointment">
        <div class="content-titles" data-aos="fade-right">
                        <p><svg 
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="65px" height="1px">
                <path fill-rule="evenodd"  fill="rgb(102, 215, 210)"
                d="M-0.000,1.000 L-0.000,-0.000 L65.000,-0.000 L65.000,1.000 L-0.000,1.000 Z"/>
                </svg><?php the_field('make_appointment_title');?></p>
        </div>

        <div class="container-fluid pini1">
            <div class="row rov1">
                <div class="appointment col-lg-6" data-aos="zoom-in">
                    <div class="appointment-form">
                        <?php dynamic_sidebar('appointment-form');?>
                    </div> 
                </div>
                <div class="appointment-foto col-lg-6">
                    <img src="<?php the_field('appointment_foto');?>" alt=""></img>
                </div>
            </div>
        </div>
     </section>          
 </div>

            <div class="info-awards">
                <div class="container-fluid pini">
                    <div class="info-content">
                        <div class="row">
                                <?php
                            $args = array(
                                'post_type' => 'infos',
                                'posts_per_page' => '4',
                            );
                            $loop = new WP_Query($args);
                            while($loop->have_posts()):
                                $loop->the_post();
                            ?>
                                <div class="infodiv col-lg-3 col-md-3 col-sm-6 mb-4 " data-aos="zoom-in" data-aos-duration="1500">
                                        <h2><?php the_content();?></h2>
                                        <h1><?php the_title();?></h1>
                                 </div>
                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>     
                        </div>
                    </div>
                </div>
             </div>

<div class="container-fluid pini">      
     <div class="content-titles" data-aos="fade-right">
         <p><svg 
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         width="65px" height="1px">
         <path fill-rule="evenodd"  fill="rgb(102, 215, 210)"
         d="M-0.000,1.000 L-0.000,-0.000 L65.000,-0.000 L65.000,1.000 L-0.000,1.000 Z"/>
         </svg><?php the_field('doctors-title');?></p>
     </div>
     <div class="container-fluid pini1">
            <section class="service-posts">
                    <div class="row">
                        <?php
                    $args = array(
                        'post_type' => 'doctors',
                        'posts_per_page' => '3',
                    );
                    $loop = new WP_Query($args);
                    while($loop->have_posts()):
                        $loop->the_post();
                    ?>
                          <div class="post_u_content col-lg-4 col-md-6 col-sm-6" data-aos="zoom-in-up">
                                    <div class="content-in-departament1">
                                        <div class="post_u_contentfoto1">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="post_u_content123">
                                            <h1><?php the_title(); ?></h1>
                                            <div class="kategoria1">
                                        <p>  <?php
                                                     $categories = get_the_terms( $post->ID, 'clinic' );
 
                                                    if ( ! empty( $categories ) ) {
                                                        echo esc_html( $categories[0]->name );   
                                                    }
                                                            ?></p></div>
                                            <p><?php the_content();?></p>
                                            <h3><?php the_field('view_more_button');?></h3>                                   
                                        </div>
                                    </div>  
                                </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>       
             </section>
     </div>

     <div class="content-titles" data-aos="fade-right">
         <p><svg 
         xmlns="http://www.w3.org/2000/svg"
         xmlns:xlink="http://www.w3.org/1999/xlink"
         width="65px" height="1px">
         <path fill-rule="evenodd"  fill="rgb(102, 215, 210)"
         d="M-0.000,1.000 L-0.000,-0.000 L65.000,-0.000 L65.000,1.000 L-0.000,1.000 Z"/>
         </svg><?php the_field('testimonials_title');?></p>
     </div>



     <div class="container-fluid pini1">
         <div class="testimonials-profiles">
            <div class="row">
                            <?php
                        $args = array(
                            'post_type' => 'testimonals',
                            'posts_per_page' => '3',
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                            $loop->the_post();
                        ?>
                            <div class="post_u_testimonials col-lg-4 col-md-4 col-sm-6" data-aos="fade-up" data-aos-duration="1500">
                                        <div class="content-in-testimonials">
                                        <div class="testimonials-content">
                                                <h1><?php the_title(); ?></h1>
                                                <p><?php the_content();?></p>                                 
                                        </div>
                                        </div> 
                                            <div class="testimonials-photo">
                                                <?php the_post_thumbnail(); ?>
                                            </div>
                                            
                                         
                                    </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
             </div>       
         </div>
     </div>

</div>  

    <?php get_footer();?>
