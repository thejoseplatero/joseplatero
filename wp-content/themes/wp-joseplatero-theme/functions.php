<?php 

 // Styles
 function theme_styles() {
 
 	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
  	wp_enqueue_style( 'social', get_template_directory_uri() . '/css/webfonts.css' );
  	wp_enqueue_style( 'goglefont-opensans', 'http://fonts.googleapis.com/css?family=Open+Sans' );
 	wp_enqueue_style( 'grid', get_template_directory_uri() . '/css/grid.css' );
 	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
 	wp_enqueue_style( 'social', get_template_directory_uri() . '/css/webfonts/ss-social.css' );
 }

 add_action('wp_enqueue_scripts', 'theme_styles');

  // Enable custom menus
  add_theme_support( 'menus');

?>