<?php
function testwordpress_resources(){
    // wp_enqueue_style('style', get_template_directory_uri());
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css',false,'1.1','all');
    wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css',false,'1.1','all');   
     wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/bootstrap/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/assets/script.js', array ( 'jquery' ), 1.1, true);


}

add_action('wp_enqueue_scripts', 'testwordpress_resources');

register_nav_menus(array(
    'primary' => __('Primary Menu'),
    'footer' => __('Footer Menu')
));
add_theme_support("custom-logo");
add_theme_support("custom-header");
add_theme_support("post-thumbnails");

function WidgetsInit(){

    register_sidebar(array(

        'name' => 'rights',
        'id' => 'rights'
));

register_sidebar(array(

    'name' => 'schedule-footer',
    'id' => 'schedule-footer'
));

register_sidebar(array(

    'name' => 'links-footer',
    'id' => 'links-footer'
));

register_sidebar(array(

    'name' => 'contact-footer',
    'id' => 'contact-footer'
));

register_sidebar(array(

    'name' => 'socialmedia-footer',
    'id' => 'socialmedia-footer'
));
register_sidebar(array(

    'name' => 'newsletter-footer',
    'id' => 'newsletter-footer'
));
register_sidebar(array(

    'name' => 'newsletter-title',
    'id' => 'newsletter-title'
));
register_sidebar(array(

    'name' => 'contact-form',
    'id' => 'contact-form'
));
register_sidebar(array(

    'name' => 'header-facebook',
    'id' => 'header-facebook'
));
register_sidebar(array(

    'name' => 'header-instagram',
    'id' => 'header-instagram'
));
register_sidebar(array(

    'name' => 'header-twitter',
    'id' => 'header-twitter'
));

register_sidebar(array(

    'name' => 'appointment-form',
    'id' => 'appointment-form'
));

register_sidebar(array(

    'name' => 'logo-header',
    'id' => 'logo-header'
));
register_sidebar(array(

    'name' => 'phone-header',
    'id' => 'phone-header'
));
register_sidebar(array(

    'name' => 'email-header',
    'id' => 'email-header'
));
register_sidebar(array(

    'name' => 'location-header',
    'id' => 'location-header'
));
register_sidebar(array(

    'name' => 'time-header',
    'id' => 'time-header'
));
register_sidebar(array(

    'name' => 'menu-header',
    'id' => 'menu-header'
));
register_sidebar(array(

    'name' => 'phone-numbers',
    'id' => 'phone-numbers'
));
register_sidebar(array(

    'name' => 'contanct-emails',
    'id' => 'contanct-emails'
));
register_sidebar(array(

    'name' => 'location-info',
    'id' => 'location-info'
));

register_sidebar(array(

    'name' => 'schedule-header',
    'id' => 'schedule-header'
));

register_sidebar(array(

    'name' => 'make-appointment',
    'id' => 'make-appointment'
));

}

add_action('widgets_init','WidgetsInit');

function custom_post_type(){
    // Home slider post type
    $labels_frontpage = array(
        'name' => 'services',
    );
    register_post_type('services', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'content',
          'thumbnail',
          'revisions',
        ),
        'menu_position' => 7,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
    ));

    $labels_frontpage = array(
        'name' => 'departaments',
    );
    register_post_type('departaments', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'content',
          'thumbnail',
          'revisions',
        ),
        'menu_position' => 8,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomy' => 'category',
    ));

    $labels_frontpage = array(
        'name' => 'home-slider',
    );
    register_post_type('home-slider', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'content',
          'thumbnail',
          'revisions',
        ),
        'menu_position' => 9,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomy' => 'category',
    ));

    $labels_frontpage = array(
        'name' => 'doctors',
    );
    register_post_type('doctors', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'content',
          'thumbnail',
          'revisions',
        ),
        'menu_position' => 9,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomy' => 'category',
    ));

    $labels_frontpage = array(
        'name' => 'testimonals',
    );
    register_post_type('testimonals', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'content',
          'thumbnail',
          'revisions',
        ),
        'menu_position' => 9,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomy' => 'category',
    ));

    $labels_frontpage = array(
        'name' => 'infos',
    );
    register_post_type('infos', array(
        'labels' => $labels_frontpage,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'supports' => array(
          'title',
          'editor',
          'excerpt',
          'content',
          'thumbnail',
          'revisions',
        ),
        'menu_position' => 9,
        'exclude_from_search' => false,
        'menu_icon' => 'dashicons-format-gallery',
        'taxonomy' => 'category',
    ));

}
add_action('init', 'custom_post_type');

add_action( 'init', 'crunchify_create_deals_custom_taxonomy', 0 );
//create a custom taxonomy name it "type" for your posts
function crunchify_create_deals_custom_taxonomy() {


    $labels1 = array(
    'name' => _x('Categories', 'taxonomy general departaments' ),
    'singular_name' => _x('Categories', 'taxonomy singular departaments' ),
    'search_items' =>  __( 'Search Types' ),
    'all_items' => __( 'All Types' ),
    'parent_item' => __( 'Parent Type' ),
    'parent_item_colon' => __( 'Parent Type:' ),
    'edit_item' => __( 'Edit Type' ), 
    'update_item' => __( 'Update Type' ),
    'add_new_item' => __( 'Add New Type' ),
    'new_item_name' => __( 'New Type Name' ),
    'menu_name' => __( 'Categories' ),
    ); 	
    
    register_taxonomy('categories',array('departaments'), array(
    'hierarchical' => true,
    'labels' => $labels1,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'categories' ),
    ));

    $labels2 = array(
        'name' => _x('clinic', 'taxonomy general doctors' ),
        'singular_name' => _x('clinic', 'taxonomy singular doctors' ),
        'search_items' =>  __( 'Search Types' ),
        'all_items' => __( 'All Types' ),
        'parent_item' => __( 'Parent Type' ),
        'parent_item_colon' => __( 'Parent Type:' ),
        'edit_item' => __( 'Edit Type' ), 
        'update_item' => __( 'Update Type' ),
        'add_new_item' => __( 'Add New Type' ),
        'new_item_name' => __( 'New Type Name' ),
        'menu_name' => __( 'clinic' ),
        ); 	
        
        register_taxonomy('clinic',array('doctors'), array(
        'hierarchical' => true,
        'labels' => $labels2,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'clinic' ),
        ));
}