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
