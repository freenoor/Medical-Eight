<?php

    get_header();?>
    <section class="archive_section">
        <div class="container">
                    <div class="row">
        <?php
        if ( have_posts() ): 
            while( have_posts() ): 
                the_post();?>
                
                        <div class="archive_pos col-lg-6 col-md-6 col-sm-12">
                            <a id="nes" href="<?php the_permalink();?>">
                            <?php the_post_thumbnail();?>
                        <h2><?php the_title();?></h2>
                        </a>
                        </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>

    </div>
    </section>

    <?php get_footer(); ?>