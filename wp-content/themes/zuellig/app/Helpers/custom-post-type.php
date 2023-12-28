<?php

function create_project_locations_post_type() {
    // Labels for the custom post type
    $labels = array(
        'name'               => _x( 'Project Locations', 'post type general name', 'your-text-domain' ),
        'singular_name'      => _x( 'Project Location', 'post type singular name', 'your-text-domain' ),
        'menu_name'          => _x( 'Project Locations', 'admin menu', 'your-text-domain' ),
        'name_admin_bar'     => _x( 'Project Location', 'add new on admin bar', 'your-text-domain' ),
        'add_new'            => _x( 'Add New', 'project location', 'your-text-domain' ),
        'add_new_item'       => __( 'Add New Project Location', 'your-text-domain' ),
        'new_item'           => __( 'New Project Location', 'your-text-domain' ),
        'edit_item'          => __( 'Edit Project Location', 'your-text-domain' ),
        'view_item'          => __( 'View Project Location', 'your-text-domain' ),
        'all_items'          => __( 'All Project Locations', 'your-text-domain' ),
        'search_items'       => __( 'Search Project Locations', 'your-text-domain' ),
        'parent_item_colon'  => __( 'Parent Project Locations:', 'your-text-domain' ),
        'not_found'          => __( 'No project locations found.', 'your-text-domain' ),
        'not_found_in_trash' => __( 'No project locations found in Trash.', 'your-text-domain' )
    );

    // Arguments for the custom post type
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'project-locations' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments' )
    );

    // Register the custom post type
    register_post_type( 'project_location', $args );
}

// Hook to the init action to register the custom post type
add_action( 'init', 'create_project_locations_post_type' );
