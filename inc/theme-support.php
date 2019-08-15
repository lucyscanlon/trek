<?php
/*
* This is the theme support page of the Trek Theme
*
* This page adds some default WordPress features to the theme e.g a custom logo.
*
*
* @package TrekLucyIsobel
*
*
*/


function trek_register_nav_menu() {
  register_nav_menu( 'primary', 'Header Navigation Menu');
  register_nav_menu('secondary', 'Blog Categories Menu' );
}

add_action( 'after_setup_theme', 'trek_register_nav_menu');

add_action( 'after_setup_theme', function(){
	remove_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
}, 11 );


function trek_comments() {
  $comments_num = get_comments_number();
  $comments;
  if( comments_open() ){
    if( $comments_num == 0) {
      $comments = __('No comments', 'trek');
    } else if ( $comments_num > 1) {
      $comments = $comments_num . __(' Comments', 'trek');
    } else {
      $comments = __('1 Comment', 'Trek');
    }
    $comments = '<a href="'. get_comments_link() . '"><span></span>' . $comments . '</a>';
  } else {
    $comments = __('Comments are closed', 'trek');
  }


  return $comments;
}


// Add 'odd' and 'even' post classes on posts on index page
function alternating_post_class ( $classes ) {
 global $current_class;
 if( is_home() ):
 $classes[] = $current_class;
 $current_class = ($current_class == 'odd') ? 'even' : 'odd';
 endif;
 return $classes;
}
add_filter ('post_class', 'alternating_post_class');
global $current_class;
$current_class = 'odd';
?>
