<section class="newpart">

    <div class="container-fluid">
        <div class="container">
            <div class=" menu_post_row">

                <div class="row m-0">

                    <div class="tabconto col-lg-8 col-md-12 col-12 order-xl-1 order-lg-1 order-md-2 order-sm-2 order-2">
                        <?php
                        $args = array(
                            'taxonomy' => 'types2',
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
                                id="post-<?= $cat->slug; ?>">
                                <?php
                            $args1 = array(
                                'posts_per_page' => -1,
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'types2',
                                        'field' => 'slug',
                                        'terms' => $cat->slug
                                    )
                                ),
                                'post_type' => 'gesundheit',
                                'orderby' => 'title',
                                'order' => 'DESC',
                                );
                                $wp_query = new WP_Query($args1);
                                while($wp_query->have_posts()): $wp_query->the_post();
                                ?>
                                <div class="post_u_content">
                                    <div class="post_u_contentfoto">
                                        <?php the_post_thumbnail(); ?>
                                        <P><?php echo get_the_date("d/m/y");?></P>
                                    </div>
                                    <div class="post_u_content1">
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>



                                <?php
                                $counter++;
                            endwhile; 
                                wp_reset_postdata(); ?></div>
                            <?php endforeach; 
                            wp_reset_query();?>

                            <?php get_template_part( '/templates/footer_parts' ); ?>

                        </div>
                    </div>
                    
                </div>




            </div>
        </div>
    </div>
</section>