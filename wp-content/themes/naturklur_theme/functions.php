<?php

function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'bulma', get_stylesheet_directory_uri() . '/bulma-0.8.2/css/bulma.min.css' );
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// Menu: Header and Footer
function wpb_custom_new_menu() {
  register_nav_menu('header-menu',__( 'Header Menu', 'naturklur_theme' ));
  //register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'wpb_custom_new_menu' );

add_theme_support( 'post-thumbnails' );




/*
add_action( 'wp_enqueue_scripts', function() {
  wp_enqueue_script('vue', get_template_directory_uri() . '/assets/js/lib/vue.js', null, null, true);
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', 'vue', null, true);
*/

//wp_enqueue_style( 'sass', get_stylesheet_directory_uri() . '/sass/style.scss');
//wp_enqueue_style( 'navbar', get_template_directory_uri() . '/sass/_navbar.css', false,'1.1','all');
//wp_enqueue_style( 'readbook', get_template_directory_uri() . '/sass/_readbook.scss', false,'1.1','all');
//wp_enqueue_style( 'front-page', get_template_directory_uri() . '/sass/_frontpage.scss', false,'1.1','all');

//wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array ( 'jquery' ), 1.1, true);

//. 'style.css'

?>
