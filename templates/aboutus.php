<!--
    Template Name: aboutus
    -->

    <?php get_header();?>

<div class="contact-welcome" style="background-image: url(<?php the_field('aboutus_banner');?>)">
    <div class="container-fluid pini"> 
        <div class="contact-banner-content">
            <div class="about-us animated fadeInDown">
                <p><?php the_field('aboutus_banner_content');?></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pini">
    <section class="aboutus">

        <div class="aboutus-title" data-aos="fade-right">
            <p><svg 
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        width="65px" height="1px">
        <path fill-rule="evenodd"  fill="rgb(102, 215, 210)"
        d="M-0.000,1.000 L-0.000,-0.000 L65.000,-0.000 L65.000,1.000 L-0.000,1.000 Z"/>
        </svg><?php the_field('aboutus-title');?></p>
        </div>

    <div class="container-fluid pini1">
        <div class="row aboutus-content">
            <div class="teksti-aboutus col-lg-7 col-md-12 mb-5">
                <p><?php the_field('info-aboutus');?></p>
                <a href="#" data-aos="zoom-in"><?php the_field('aboutus-more');?></a>
            </div>
            <div class="video-about-us col-lg-5 col-md-12 mb-5" data-aos="zoom-in" >
                <img src="<?php the_field('aboutus-video');?>"></img>
            </div>
        </div>
    </div>
        <div class="specialists-div">
            <div class="specialist-title" data-aos="fade-right">
                <p><svg 
        xmlns="http://www.w3.org/2000/svg"
        xmlns:xlink="http://www.w3.org/1999/xlink"
        width="65px" height="1px">
        <path fill-rule="evenodd"  fill="rgb(102, 215, 210)"
        d="M-0.000,1.000 L-0.000,-0.000 L65.000,-0.000 L65.000,1.000 L-0.000,1.000 Z"/>
        </svg><?php the_field('specialist_title');?></p>
            </div>
            <div class="container-fluid pini1">
            <section class="service-posts">
                    <div class="row">
                        <?php
                    $args = array(
                        'post_type' => 'doctors',
                        'posts_per_page' => '9',
                    );
                    $loop = new WP_Query($args);
                    while($loop->have_posts()):
                        $loop->the_post();
                    ?>
                          <div class="post_u_content col-lg-4 col-md-6 col-sm-6" data-aos="fade-up">
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
        </div>

       
    </section>


</div>
   

<?php get_footer();?>