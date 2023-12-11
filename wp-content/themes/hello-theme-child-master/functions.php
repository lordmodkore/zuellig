<?php


/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
	
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );

function dev_style_scripts() {
	wp_enqueue_style( 'main-css', get_stylesheet_directory_uri() . '/css/main.css', 'all' );
	wp_enqueue_script( 'main-js',get_stylesheet_directory_uri() . '/js/main.js',array( 'jquery' ) ,1, true );
	wp_enqueue_script( 'jquery-cookie-js',get_stylesheet_directory_uri() . '/js/plugin/jquery.cookie.js',array() ,1, true );
}
add_action( 'wp_enqueue_scripts', 'dev_style_scripts', 15);

#function archive_sorting( $query ) {
#    $query->set( 'orderby', 'date' );
   # $query->set( 'order', 'DESC' );
#}
#add_action( 'elementor/query/{$query_id}', 'archive_sorting' );

add_action( 'elementor/query/archive_sorting', function( $query ) {

    $query->set('orderby', 'date');
    $query->set('order','DESC');

  });

@ini_set( 'upload_max_size' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'max_execution_time', '300' );
