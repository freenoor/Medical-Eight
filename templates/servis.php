<!-- 
    Template Name:Serviz
 -->

<?php get_header();?>

<div class="contact-welcome" style="background-image: url(<?php the_field('banner_foto');?>)">
    <div class="container-fluid pini"> 
    <div class="contact-banner-content ">
        <div class="about-us animated fadeInDown">
            <p><?php the_field('banner_content');?></p>
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
                </svg><?php the_field('service_title');?></p>
        </div>
    <div class="container-fluid pini1"> 
        <section class="service-posts">
                    <div class="row">
                        <?php
                    $args = array(
                        'post_type' => 'services',
                        'posts_per_page' => '9',
                    );
                    $loop = new WP_Query($args);
                    while($loop->have_posts()):
                        $loop->the_post();
                    ?>
                        <div class="col-lg-4 mb-4 col-md-4 col-sm-6 aba " data-aos="zoom-in-up">
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
</div>


<?php get_footer();?>