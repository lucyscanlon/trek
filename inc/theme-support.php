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






//sidebar functions
function trek_sidebar_init() {
  register_sidebar(
    array(
      'name' => esc_html__( 'Trek Sidebar', 'trek '),
      'id' => 'trek-sidebar',
      'description' => 'Dynamic Sidebar',
      'before_widget' => '<section id="%1$s" class="trek-widget Montserrat %2$s"> <div class="trek-widget-width-container">',
      'after_widget' => '</div></section>',
      'before_title' => '<h2 class="trek-widget-title Montserrat">',
      'after_title' => '</h2>'

    )
  );
}

add_action('widgets_init', 'trek_sidebar_init');


//pagination
// Numbered Pagination
if ( !function_exists( 'wpex_pagination' ) ) {

	function wpex_pagination() {

		$prev_arrow = is_rtl() ? '→' : '←';
		$next_arrow = is_rtl() ? '←' : '→';

		global $wp_query;
		$total = $wp_query->max_num_pages;
		$big = 999999999; // need an unlikely integer
		if( $total > 1 )  {
			 if( !$current_page = get_query_var('paged') )
				 $current_page = 1;
			 if( get_option('permalink_structure') ) {
				 $format = 'page/%#%/';
			 } else {
				 $format = '&paged=%#%';
			 }
			echo paginate_links(array(
				'base'			=> str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format'		=> $format,
				'current'		=> max( 1, get_query_var('paged') ),
				'total' 		=> $total,
				'mid_size'		=> 3,
				'type' 			=> 'list',
				'prev_text'		=> $prev_arrow,
				'next_text'		=> $next_arrow,
			 ) );
		}
	}

}


function trek_post_navigation(){

  $nav = '<div class="single-post-navigation Montserrat">';

  $prev = get_previous_post_link( '<div class="single-link-nav">%link →</div>', '%title');
  $nav .= '<div class="text-right singlepostnav-right-container" style="width: 50%; float: right;">' . $prev . '</div>';

  $next = get_next_post_link('<div class="post-link-nav">← %link</div>', '%title');
  $nav .= '<div class="text-right singlepostnav-left-container" style="width: 50%; float: left;">' . $next . '</div>';

  $nav .= '</div>';

  return $nav;
}
