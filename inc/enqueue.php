<?php

// Enqueuing css and js for trek
function trek_lucyisobel_scripts(){

  wp_enqueue_style('trek', get_template_directory_uri() . '/css/trek.css', array(), '1.0.0', 'all');


  wp_register_script('custom', get_template_directory_uri() . '/js/jquery.js', false, '3.3.1', true);
  wp_enqueue_script('custom');

  wp_register_script('trekjquery', get_template_directory_uri() . '/js/trek.js', false, '1.0.0', true);
  wp_enqueue_script('trekjquery');
}

add_action('wp_enqueue_scripts', 'trek_lucyisobel_scripts');


// Enqueuing styles for the text editor
function block_editor_styles() {
  wp_enqueue_style( 'edit-styles', get_template_directory_uri() . '/css/editor-style.css');
  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat|Reenie+Beanie&display=swap', false );
  wp_enqueue_style( 'google-fonts-mont', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap', false );

}

add_action( 'enqueue_block_editor_assets' , 'block_editor_styles');



function trek_lucyisobel_adminscripts($hook) {
  if( 'toplevel_page_trek_settings' != $hook ){
    return;
  }

  wp_register_style( 'trek_admin', get_template_directory_uri() . '/css/trek-admin.css', array(), '1.0.0', 'all');
  wp_enqueue_style('trek_admin');

  wp_enqueue_style( 'google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat|Reenie+Beanie&display=swap', false );
  wp_enqueue_style( 'google-fonts-mont', 'https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i&display=swap', false );

  wp_enqueue_media();

}

add_action('admin_enqueue_scripts', 'trek_lucyisobel_adminscripts');
