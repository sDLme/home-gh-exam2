<?php

function exam_scripts() {
    wp_enqueue_style( 'gh-exam-style', get_stylesheet_uri() );

    wp_enqueue_script( 'jquery' );

    wp_enqueue_script( 'tether', get_template_directory_uri() . '/js/tether.min.js', array('jquery') , false, true );
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/slick.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/isotop.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array('jquery', 'slick'), false, true );

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/style/bootstrap.css');
    wp_enqueue_style( 'bootstrap-flex', get_template_directory_uri() . '/style/bootstrap-flex.css');
    wp_enqueue_style( 'bootstrap-grid', get_template_directory_uri() . '/style/bootstrap-grid.css');
    wp_enqueue_style( 'bootstrap-reboot', get_template_directory_uri() . '/style/bootstrap-reboot.css');

    wp_enqueue_style( 'slick', get_template_directory_uri() . '/style/slick.css');
    wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/style/slick-theme.css');

    wp_enqueue_style( 'main', get_template_directory_uri() . '/style/main.css');

    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"), false, '1.12.2');
        wp_enqueue_script('jquery');
    }

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'exam_scripts' );


add_theme_support( 'post-thumbnails' );

add_theme_support( 'custom-logo', array(
    'width'       => 130,
    'height'      => 35,
    'flex-width'  => true,
) );

//exerpt for pages
add_action( 'init', 'add_excerpts_to_pages' );
function add_excerpts_to_pages() {
    add_post_type_support( 'page', 'excerpt' );
}

///MENU
function register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Top Menu' ),
            'foot-menu' => __( 'Foot Menu' )
        )
    );
}
add_action( 'init', 'register_my_menus' );
////END MENU

require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/custom-post-type.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/custom-taxonomy.php';
