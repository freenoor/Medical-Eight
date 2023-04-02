<?php get_header(); 
the_post();?>

<div class="contact-welcome" style="background-image: url(<?php the_field('aboutus_banner',15);?>)">
    <div class="container-fluid pini"> 
        <div class="contact-banner-content">
            <div class="about-us">
                <p><?php the_field('aboutus_banner_content',15);?></p>
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
         </svg><?php the_title(); ?></p>
     </div>
     <div class="container-fluid pini1">
        <div class="homeposthometexttt1">
            <div class="imgfoto-departments1" data-aos="fade-up">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="departments-single-content1">
                <p ><?php the_content(); ?></p>
            </div>
        </div>
     </div>
</div>
<?php get_footer();?>