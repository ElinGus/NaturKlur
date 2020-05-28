<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bulma', get_stylesheet_directory_uri() . '/bulma-0.8.2/css/bulma.min.css' );
  wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome.css');
 

  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script-trickywords', get_template_directory_uri() . '/js/script-trickywords.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'script-practice', get_template_directory_uri() . '/js/script-practice.js', array ( 'jquery' ), 1.1, true);
  wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function wpb_add_google_fonts() {
   wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display|Space+Mono|Stint+Ultra+Expanded&display=swap', false );
   }
   
   add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );



// Menu: Header and Footer
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => ('Header menu'),
    )
  );
}
    add_action('init', 'register_my_menus');

add_theme_support( 'post-thumbnails' );



?>


