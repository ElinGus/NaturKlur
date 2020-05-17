<?php
/**
 * Plugin Name: Vue Read book plugin
 * Description: A plugin that shows iframe content useing Vue in WordPress.
 */
?>

<?php

function load_vuescripts() {
    wp_register_script( 'readbook_vuejs', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js');
    wp_register_script('my_vuecode', plugin_dir_url( __FILE__ ).'vuecode-readbook.js', 'readbook_vuejs', true );
   }
   //Tell WordPress to register the scripts 
   add_action('wp_enqueue_scripts', 'load_vuescripts');




 //Return string for shortcode
 function func_readbook(){
     //Add Vue.js
  wp_enqueue_script('readbook_vuejs');
    //Add my code to it
  wp_enqueue_script('my_vuecode');

     //Build String
    $str= "<div id='iframe'>"
    ."Message from Vue:" . "<br>"
    ."{{ message }} " . "<br>"
    . "<br>"
    ."{{ text }}" . "<br>"
    ."{{ image }}"
    ."</div>";
  
    //Return
    return $str;
  } // end function

 add_shortcode( 'readbook', 'func_readbook' );

 ?>