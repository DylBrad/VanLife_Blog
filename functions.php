<?php

// Link to queries.php
// Makes any functions written in inc folder available
require get_template_directory() . '/inc/queries.php';

// Create menus
function van_blog_menus() {
    //wordpress function
    register_nav_menus(array( 
        'van-blog-menus' => 'Main Menu'
    ));
}

// Hook
add_action('init', 'van_blog_menus');

// Add stylesheets and JS
function van_blog_scripts() {
    //normalize css
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    // Google Font
    wp_enqueue_style('googlefont', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap', array(), '1.0.0');

    //Main Stylesheet. array indicates files to load BEFORE this one.
    wp_enqueue_style('style', get_stylesheet_uri() , array('normalize', 'googlefont') , '1.0.0');

    //Load JS Files
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array(), '1.0.0', true);
}

// Hook
add_action('wp_enqueue_scripts', 'van_blog_scripts');


//  Enable Feature Image (and more)

function van_blog_setup() {

    // Register new image size
    add_image_size('square', 350, 350, true);
    add_image_size('rectancle', 1500, true);
    add_image_size('largerRectancle', 1500, 1050, true);
    add_image_size('smallerRectancle', 400, 250, true);
    add_image_size('mediumSize', 700, 400, true);
    add_image_size('index-size', 515, 275, true);
    add_image_size('larger', 800, 450, true);
    add_image_size('blog', 966, 644, true);
    
    // Register featured img
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'van_blog_setup');

//Create Widget Zone 

function van_blog_widgets() {
    register_sidebar( array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-primary sidebar-title">',
        'after_title' => '</h3>'
    ) );

    register_sidebar( array(
        'name' => 'Van Life Sidebar',
        'id' => 'sidebar-van-life',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="text-primary sidebar-title">',
        'after_title' => '</h3>'
    ) );
}

add_action('widgets_init', 'van_blog_widgets');



// Display Front Page Hero Image Field
// function van_blog_hero_image() {
//     $front_page_id = get_option('page_on_front');
//     $image_id = get_field('hero_image', $front_page_id);

//     $image = $image_id['url'];

//     // Create a FALSE stylesheet
//     wp_register_style('custom', false);
//     wp_enqueue_style('custom');

//     $featured_image_css = "
//         body.home .site-header {
//             background-image: url( $image );
//             background-size: cover;
//         }
//     ";

//     wp_add_inline_style('custom', $featured_image_css);
// }

// add_action('init', 'van_blog_hero_image');



