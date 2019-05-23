<?php 

function thirdtheme_assets() {
	wp_enqueue_style( 'thirdtheme-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css', array(), '1.0.0', 'all' );

	wp_enqueue_script( 'thirdtheme-scripts', get_template_directory_uri() . '/dist/assets/js/bundle.js', array('jquery'), '1.0.0', true);
}

add_action('wp_enqueue_scripts','thirdtheme_assets');


function thirdtheme_admin_assets() {
	wp_enqueue_style( 'thirdtheme-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css', array(), '1.0.0', 'all' );

	wp_enqueue_script( 'thirdtheme-admin-scripts', get_template_directory_uri() . '/dist/assets/js/admin.js', array(), '1.0.0', true);
}

add_action('admin_enqueue_scripts','thirdtheme_admin_assets');