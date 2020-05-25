<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bulma', get_stylesheet_directory_uri() . '/bulma-0.8.2/css/bulma.min.css' );
  //wp_enqueue_style('fontawesome', get_stylesheet_directory_uri() . '/css/fontawesome.css');

  wp_enqueue_script( 'script-trickywords', get_template_directory_uri() . '/js/script-trickywords.js', array ( 'jquery' ), 1.1, true);
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Menu: Header and Footer
function wpb_custom_new_menu() {
  register_nav_menu('header-menu',__( 'Header Menu', 'naturklur_theme' ));
  //register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'post-thumbnails' );



?>