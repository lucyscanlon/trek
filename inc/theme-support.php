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

/* Registering Menu Locations */
function trek_register_nav_menu() {
  register_nav_menu( 'primary', 'Header Navigation Menu');
  register_nav_menu('secondary', 'Blog Categories Menu' );
}

add_action( 'after_setup_theme', 'trek_register_nav_menu');


/* Add Featured Image */
add_action( 'after_setup_theme', function(){
	remove_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
}, 11 );


/*  function for retrieveing comment information   */
function trek_comments() {
  $comments_num = get_comments_number();
  $comments;
  if( comments_open() ){
    if( $comments_num == 0) {
      $comments = __('No comments', 'trek');
    } else if ( $comments_num > 1) {
      $comments = $comments_num . __(' Comments', 'trek');
    } else {
      $comments = __('1 Comment', 'trek');
    }
    $comments = '<a href="'. get_comments_link() . '"><span></span>' . $comments . '</a>';
  } else {
    $comments = __('Comments are closed', 'trek');
  }


  return $comments;
}


/* Sidebar Initialisation */
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


/* Pagination for index */
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

/* Single Post Navigation Bar */
function trek_post_navigation(){

  $nav = '<div class="single-post-navigation Montserrat">';

  $prev = get_previous_post_link( '<div class="single-link-nav">%link →</div>', '<i>(Previous)</i> %title');
  $nav .= '<div class="text-right singlepostnav-right-container singlepost-navigation-colors" style="width: 50%; float: right;">' . $prev . '</div>';

  $next = get_next_post_link('<div class="post-link-nav">← %link</div>', '<i>(Newer)</i> %title');
  $nav .= '<div class="text-right singlepostnav-left-container singlepost-navigation-colors" style="width: 50%; float: left;">' . $next . '</div>';

  $nav .= '</div>';

  return $nav;
}



/* fetching single post tags and adding a hastag infront  */
function trek_get_tags() {
  return get_the_tag_list('<div class="tags-list">#', ' #', '</div>');
}




/* adding html features  */
add_theme_support( 'html5', array( 'comment-list', 'commentform') );



/* Comment Section Navigation */
function trek_get_post_navigation() {

  if( get_comment_pages_count() > 1 && get_option('page_comments') ):

    require get_template_directory() . '/inc/template-parts/single-post/comments-navigation.php';


  endif;
}



/* Adding the option to add a logo */
add_theme_support( 'custom-logo', array(
  'height' => '100',
  'width' => '100',
  'flex-height' => true,
  'flex-width' => true,
  'header-text' => array( 'site-title', 'site-description' ),
) );


add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
