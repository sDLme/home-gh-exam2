<?php
/**
 * Created by PhpStorm.
 * User: Marina
 * Date: 01.04.2017
 * Time: 17:06
 */
function create_services_type() {
    $args=array(
        $labels = array(
            'name' => __( 'services' ),
            'singular_name' => __( 'Service' ),
            'menu_name'          => _x( 'Services', 'admin menu' ),
            'name_admin_bar'     => _x( 'Services', 'add new on admin bar' ),
            'add_new'            => _x( 'Add New Services', 'testimonial' ),
            'add_new_item'       => __( 'Add New Services' ),
            'new_item'           => __( 'New Services' ),
            'edit_item'          => __( 'Edit Service' ),
            'view_item'          => __( 'View Service' ),
            'all_items'          => __( 'All Services' ),
            'search_items'       => __( 'Search Service'),
            'parent_item_colon'  => __( 'Parent Service:' ),
            'not_found'          => __( 'No Service found.' ),
            'not_found_in_trash' => __( 'No Service found in Trash.' )
        ),
        'labels'             => $labels,
        'description'        => __( 'Description.' ),
        'public' => true,
        'rewrite' => array('slug' => 'services'),
        'supports' => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' )
    );
    register_post_type( 'ajy_services', $args );
}
add_action( 'init', 'create_services_type' );



function create_clients_post_type() {
    $args=array(
        'labels' => array(
            'name' => __( 'Clients' ),
            'singular_name' => __( 'client' ),
            'menu_name'          => _x( 'Clients', 'admin menu' ),
            'name_admin_bar'     => _x( 'Clients', 'add new on admin bar' ),
            'add_new'            => _x( 'Add New Client', 'testimonial' ),
            'add_new_item'       => __( 'Add New Client' ),
            'new_item'           => __( 'New Client' ),
            'edit_item'          => __( 'Edit Client' ),
            'view_item'          => __( 'View Client' ),
            'all_items'          => __( 'All Clients' ),
            'search_items'       => __( 'Search Client'),
            'parent_item_colon'  => __( 'Parent Client:' ),
            'not_found'          => __( 'No Client found.' ),
            'not_found_in_trash' => __( 'No Client found in Trash.' )
        ),
        'public' => true,
        'rewrite' => array('slug' => 'clients'),
        'supports' => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' )
    );
    register_post_type( 'ajy_clients', $args );
}
add_action( 'init', 'create_clients_post_type' );

function create_work_post_type() {
    $args=array(
        'labels' => array(
            'name' => __( 'Works' ),
            'singular_name' => __( 'work' ),
            'menu_name'          => _x( 'Works', 'admin menu' ),
            'name_admin_bar'     => _x( 'Works', 'add new on admin bar' ),
            'add_new'            => _x( 'Add New Work', 'testimonial' ),
            'add_new_item'       => __( 'Add New Work' ),
            'new_item'           => __( 'New Work' ),
            'edit_item'          => __( 'Edit Work' ),
            'view_item'          => __( 'View Work' ),
            'all_items'          => __( 'All Work' ),
            'search_items'       => __( 'Search Work'),
            'parent_item_colon'  => __( 'Parent Work:' ),
            'not_found'          => __( 'No Work found.' ),
            'not_found_in_trash' => __( 'No Work found in Trash.' )
        ),
        'public' => true,
        'taxonomies' => array( 'works' ),
        'rewrite' => array('slug' => 'works'),
        'supports' => array( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' )
    );
    register_post_type( 'ajy_works', $args );
}
add_action( 'init', 'create_work_post_type' );