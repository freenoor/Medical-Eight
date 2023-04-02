<!--
    Template Name: departments
    -->

    <?php get_header();?>

<div class="contact-welcome" style="background-image: url(<?php the_field('banner-foto');?>)">
    <div class="container-fluid pini"> 
        <div class="contact-banner-content">
            <div class="about-us animated fadeInDown">
                <p><?php the_field('banner-content');?></p>
            </div>
        </div>
    </div>
</div>


<div class="container-fluid pini">
    <p id="dep-title"  data-aos="fade-right"><svg 
 xmlns="http://www.w3.org/2000/svg"
 xmlns:xlink="http://www.w3.org/1999/xlink"
 width="65px" height="1px">
<path fill-rule="evenodd"  fill="rgb(102, 215, 210)"
 d="M-0.000,0.999 L-0.000,-0.000 L65.000,-0.000 L65.000,0.999 L-0.000,0.999 Z"/>
</svg><?php the_field('departments_title');?></p>
    <section class="departament">
        <div class="title-departaments">

        </div>
        <div class="container-fluid pini1">
            <div class="row">
                <div class="col-lg-3 col-md-3 mb-5">
                    <div class="col2cat">
                        <div class="category-bar">
                            <div class="categorytit">
                                <p><?php the_field('category_title');?></p>
                            </div>
                            <?php 
                            $args = array(
                                'post_type' => 'departaments',
                                'taxonomy' => 'categories',
                                'orderby' => 'ID', 
                                'order' => 'ASC',
                                'hide_empty' => 1,
                                );
                                $cats = get_categories($args);
                                ?>
                            <ul class="nav nav-tabs ultab " id="left_column_date_search"
                                style="justify-content: flex-start ">
                                <?php
                                $counter = 0;
                                foreach($cats as $cat):   
                                    
                                    ?>
                                <li class="nav-item litab">
                                    <a class="nav-link <?= $counter == 0 ? 'active' : '' ;?>" id="<?=  $cat->slug;?>"
                                        data-toggle="tab" href="#post-<?=  $cat->slug;?>"><?= $cat->name;?></a>
                                </li>
                                <?php $counter++;
                                endforeach; 
                                wp_reset_query();?>
                            </ul>
                    </div>
                </div>
            </div>
            
                <div class="departments-posts col-lg-9 col-md-9">
                    
                        <?php
                        $args = array(
                            'taxonomy' => 'categories',
                            'orderby' => 'ID', 
                            'order' => 'ASC',
                            'hide_empty' => 1,
                            );
                            
                            $cats = get_categories($args);
                        ?>
                        <div class="tab-content">
                            <?php
                            $counter = 0;
                            foreach($cats as $cat):   

                                ?><div role="tabpanel" class="tab-pane <?=$counter == 0 ? 'active show' : '';?>"
                                id="post-<?= $cat->slug; ?>"><div class="row">
                                
                                <?php

                            $args1 = array(
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'categories',
                                        'field' => 'slug',
                                        'terms' => $cat->slug
                                    )
                                ),
                                'post_type' => 'departaments',
                                'orderby' => 'title',
                                'order' => 'DESC',
                                );
                                $wp_query = new WP_Query($args1);
                                while($wp_query->have_posts()): $wp_query->the_post();
                                ?>
                                
                                <div class="post_u_content col-lg-6 col-md-6  col-sm-6" >
                                    <div class="content-in-departament" >
                                        <div class="post_u_contentfoto">
                                            <?php the_post_thumbnail(); ?>
                                        </div>
                                        <div class="post_u_content1">
                                            <a href="<?php the_permalink();?>"><h1><?php the_title(); ?></h1></a>
                                            <p><?php the_content();?></p>
                                            <h3><?php the_field('view_more_button');?></h3>                                   
                                        </div>
                                    </div>  
                                </div>
                                
                                



                                <?php
                                $counter++;
                            endwhile; 
                                wp_reset_postdata(); ?></div></div>
                            <?php endforeach; 
                            wp_reset_query();?>

                            <?php get_template_part( '/templates/footer_parts' ); ?>
                    </div>
                </div>
                
            </div>
        </div>
     </section>


     
 </div>




<?php get_footer();?>