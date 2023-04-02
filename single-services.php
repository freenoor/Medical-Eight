
<?php get_header();?>
<div class="contact-welcome" style="background-image: url(<?php the_field('banner_foto',150);?>)">
    <div class="container-fluid pini"> 
    <div class="contact-banner-content">
        <div class="about-us">
            <p><?php the_field('banner_content',150);?></p>
        </div>
    </div>
    </div>
</div>


<div class="container-fluid pini">

    <div class="single-service-section">
        <?php
        while (have_posts()) : the_post(); ?>
    <div class="single-service-title" data-aos="fade-right">
                        <h3><svg 
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="65px" height="1px">
                <path fill-rule="evenodd"  fill="rgb(102, 215, 210)"
                d="M-0.000,1.000 L-0.000,-0.000 L65.000,-0.000 L65.000,1.000 L-0.000,1.000 Z"/>
                </svg><?php the_title();?></h3>
        </div>
            <div class="container-fluid pini1">
                <div class="hello0 row">
                    <div class="col-lg-3 mb-5">
                    <img id="single-serviceimg" src="<?php the_post_thumbnail_url();?>" alt=""></img>      
                    </div>
                        <div class="service-post-content col-lg-9"  data-aos="zoom-in">
                            <p><?php the_field('content');?></p>
                        </div>            
                </div>
                <div class="service-single-links">
                    <div class="row rowing-links"> 
                        <div class="col1ss col-lg-4 col-md-6 col-sm-6 mb-4"> 
                        <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                            <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                            <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                        </div> 
                        <div class="col1ss1 col-lg-4 col-md-6 col-sm-6 mb-4"> 
                            <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                            <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                            <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                        </div> 
                        <div class="col1ss2 col-lg-4 col-md-6 col-sm-6 mb-4"> 
                            <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                            <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                            <p><i class="fas fa-check-circle"></i><?php the_field('title1');?></p>
                        </div> 
                    </div>   
                </div>

            </div>
    </div>

    <?php endwhile; ?>
</div>

<?php get_footer();?>