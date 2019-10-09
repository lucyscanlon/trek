<?php


function trek_lucyisobel_scripts(){

  wp_enqueue_style('trek', get_template_directory_uri() . '/css/trek.css', array(), '1.0.0', 'all');


  wp_deregister_script('jquery');
  wp_register_script('jquery', get_template_directory_uri() . '/js/jquery.js', false, '3.3.1', true);
  wp_enqueue_script('jquery');

  wp_register_script('trekjquery', get_template_directory_uri() . '/js/trek.js', false, '1.0.0', true);
  wp_enqueue_script('trekjquery');
}

add_action('wp_enqueue_scripts', 'trek_lucyisobel_scripts');


//enqueuing styles for the text editor
function block_editor_styles() {
  wp_enqueue_style( 'edit-styles', get_template_directory_uri() . '/css/editor-style.css');
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat|Reenie+Beanie&display=swap', false );
  wp_enqueue_style( 'google-fonts-mont', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap', false );

}

add_action( 'enqueue_block_editor_assets' , 'block_editor_styles');
